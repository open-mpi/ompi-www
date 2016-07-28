<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  8 15:11:31 2006" -->
<!-- isoreceived="20060508191131" -->
<!-- sent="Mon, 8 May 2006 21:10:56 +0200" -->
<!-- isosent="20060508191056" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in Makefile.in" -->
<!-- id="20060508191056.GA5458_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="445F9219.3000709_at_cs.kuleuven.be" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-08 15:10:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0866.php">Dries Kimpe: "[OMPI devel] another small ROMIO fix..."</a>
<li><strong>Previous message:</strong> <a href="0864.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>In reply to:</strong> <a href="0864.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0867.php">Brian Barrett: "Re: [OMPI devel] bug in Makefile.in"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Dries Kimpe wrote on Mon, May 08, 2006 at 08:46:49PM CEST:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) The $ in grep 'pvfs$' was added by me as a temporary hack to
</span><br>
<span class="quotelev1">&gt;     prevent it from building pvfs along with pvfs2.
</span><br>
<span class="quotelev1">&gt;   It's not a good solution anyway, because $FILE_SYSTEM contains things
</span><br>
<span class="quotelev1">&gt;   as &quot;nfs ufs pvfs pvfs2&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Really, the correct fix is just to use $file_system_pvfs,
</span><br>
<span class="quotelev1">&gt; $file_system_pvfs2, ...
</span><br>
<p>Nah.  Don't use two processes per conditional if you can get away with
<br>
none.  Let's not make the build slower than necessary.
<br>
<p><span class="quotelev1">&gt; Dries Kimpe wrote:
</span><br>
<span class="quotelev2">&gt; &gt; AM_CONDITIONAL(BUILD_GRIDFTP, [test -n &quot;`echo $FILE_SYSTEM | grep gridftp`&quot;])
</span><br>
<p>AM_CONDITIONAL(BUILD_GRIDFTP,
<br>
&nbsp;&nbsp;[{ case &quot; $FILE_SYSTEM &quot; in &quot; gridftp &quot;) :;; *) false;; esac; }])
<br>
<p>If you don't want to type each, you could use something along these
<br>
lines:
<br>
<p>m4_foreach([my_fs], [hfs, nfs, panfs, ...],
<br>
&nbsp;&nbsp;[AM_CONDITIONAL(BUILD_[]AS_TR_CPP(my_fs),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[{ case &quot; $FILE_SYSTEM &quot; in \ my_fs\ ) :;; *) false;; esac; }])
<br>
&nbsp;&nbsp;])
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0866.php">Dries Kimpe: "[OMPI devel] another small ROMIO fix..."</a>
<li><strong>Previous message:</strong> <a href="0864.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<li><strong>In reply to:</strong> <a href="0864.php">Dries Kimpe: "Re: [OMPI devel] bug in Makefile.in"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0867.php">Brian Barrett: "Re: [OMPI devel] bug in Makefile.in"</a>
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
