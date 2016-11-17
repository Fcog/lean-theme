<div id="disqus_thread"></div>

<script>
var disqus_config = function() {
	this.page.url = "{{ post.acf.permalink }}";
	if ( post.id ) {
		this.page.identifier = post.id;
	}

	(function() {  // DON'T EDIT BELOW THIS LINE
		var d = document, s = d.createElement( 'script' );

		s.src = '//{{ options.general_options.general_options_disqus_org }}.disqus.com/embed.js';

		s.setAttribute( 'data-timestamp', +new Date() );
		(d.head || d.body).appendChild( s );
	})();
</script>
