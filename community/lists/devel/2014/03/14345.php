<?
$subject_val = "Re: [OMPI devel] orte-restart and PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 05:14:47 2014" -->
<!-- isoreceived="20140314091447" -->
<!-- sent="Fri, 14 Mar 2014 04:14:47 -0500" -->
<!-- isosent="20140314091447" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-restart and PATH" -->
<!-- id="CAANzjEmVA97LEqYEpp8ZJb0Y=ek5GJHBMzO2XbEeq9yMjK6FzQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="436BE89D-555E-4BDB-8BB8-2F75DF04C20B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte-restart and PATH<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-14 05:14:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14346.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Previous message:</strong> <a href="14344.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.5rc3 has been released"</a>
<li><strong>In reply to:</strong> <a href="14340.php">Ralph Castain: "Re: [OMPI devel] orte-restart and PATH"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like I did not add the prefix path to the binary name before
<br>
fork/exec in orte-restart.
<br>
<p>There is a string variable that you can use to get the appropriate prefix:
<br>
&nbsp;&nbsp;opal_install_dirs.prefix
<br>
from
<br>
&nbsp;&nbsp;opal/mca/installdirs/installdirs.h
<br>
<p>It's the same one that Ralph mentioned that orterun uses.
<br>
<p>If you add that on there then you should be ok. You might want to check the
<br>
app-files produces use the prefix as well when referencing opal-restart.
<br>
<p><p><p>On Wed, Mar 12, 2014 at 11:34 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That's what the --enable-orterun-prefix-by-default configure option is for
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2014, at 9:28 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using orte-restart without setting my PATH to my Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; installation. I am running /full/path/to/orte-restart and orte-restart
</span><br>
<span class="quotelev2">&gt; &gt; tries to run mpirun to restart the process. This fails on my system
</span><br>
<span class="quotelev2">&gt; &gt; because I do not have any mpirun in my PATH. Is it expected for an Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI installation to set up the PATH variable or should it work using the
</span><br>
<span class="quotelev2">&gt; &gt; absolute path to the binaries?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Should I just set my PATH correctly and be done with it or should
</span><br>
<span class="quotelev2">&gt; &gt; orte-restart figure out the full path to its accompanying mpirun and
</span><br>
<span class="quotelev2">&gt; &gt; start mpirun with the full path?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               Adrian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14339.php">http://www.open-mpi.org/community/lists/devel/2014/03/14339.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14340.php">http://www.open-mpi.org/community/lists/devel/2014/03/14340.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14345/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14346.php">Bibrak Qamar: "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Previous message:</strong> <a href="14344.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.5rc3 has been released"</a>
<li><strong>In reply to:</strong> <a href="14340.php">Ralph Castain: "Re: [OMPI devel] orte-restart and PATH"</a>
<!-- nextthread="start" -->
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
