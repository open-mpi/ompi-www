<?
$subject_val = "[OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 17:52:13 2016" -->
<!-- isoreceived="20160324215213" -->
<!-- sent="Thu, 24 Mar 2016 16:52:13 -0500" -->
<!-- isosent="20160324215213" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun --verbose &amp;amp;&amp;amp; opal_output_verbose() on 0" -->
<!-- id="CAANzjEmt-ccwG9a80ACA5b9_dqZ+K=69748FBGO5WZ+dSVd3EQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-24 17:52:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18730.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0"</a>
<li><strong>Previous message:</strong> <a href="18728.php">Atchley, Scott: "Re: [OMPI devel] Confusion about slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18730.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0"</a>
<li><strong>Reply:</strong> <a href="18730.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was rummaging through the code today and made two observations related to
<br>
verbose. Neither is terribly critical, but probably worth making the
<br>
developer community aware. (2) might need to be fixed.
<br>
<p>(1) mpirun --verbose
<br>
It does not seem to do anything in the current master (and probably for
<br>
quite some time). Would it be useful to display something with this flag?
<br>
Maybe set the default verbosity for all components? Show launch status?
<br>
<p>(2) opal_output_verbose(MCA_BASE_VERBOSE_INFO, 0, &quot;&quot;)
<br>
The above function call (found in a number of place in opal/mca/base/)
<br>
cannot be turned on since stream 0 has its verbosity set to 0, and there
<br>
does not seem to be a mechanism in the repo to adjust this value. (Am I
<br>
correct here?) It would be nice to be able to activate some of these
<br>
varbosity settings when debugging the MCA core (like trying to determine
<br>
why a component is not loading). So it seems like we need an
<br>
mca_base_verbose option somewhere. Any opinions here?
<br>
<p>-- Josh
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18729/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18730.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0"</a>
<li><strong>Previous message:</strong> <a href="18728.php">Atchley, Scott: "Re: [OMPI devel] Confusion about slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18730.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0"</a>
<li><strong>Reply:</strong> <a href="18730.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mpirun --verbose &amp;&amp; opal_output_verbose() on 0"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
