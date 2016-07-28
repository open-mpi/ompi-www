<?
$subject_val = "Re: [OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 07:27:36 2008" -->
<!-- isoreceived="20080508112736" -->
<!-- sent="Thu, 8 May 2008 07:27:25 -0400" -->
<!-- isosent="20080508112725" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH" -->
<!-- id="BB2886C2-F4FD-4DE4-A13B-E14672006FB8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="482234CE.6080609_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-08 07:27:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5645.php">Jeff Squyres: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="5643.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Internals &amp; Static-Analysis."</a>
<li><strong>In reply to:</strong> <a href="5639.php">Ingo Josopait: "[OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mpirun only does this when it is using the &quot;prefix&quot; functionality,  
<br>
which is activated in one of a few ways:
<br>
<p>- you use the absolute pathname to mpirun
<br>
- you use the &quot;--prefix&quot; option to mpirun
<br>
- you configured OMPI with the --enable-mpirun-prefix-by-default option
<br>
<p>The intent for this functionality is for users who do not want to set  
<br>
their PATH / LD_LIBRARY_PATH on remote nodes.  This is usually most  
<br>
useful when OMPI is installed in locations that are not already  
<br>
included in the PATH/LD_LIBRARY_PATH (e.g., /opt/openmpi or somesuch).
<br>
<p><p>On May 7, 2008, at 7:01 PM, Ingo Josopait wrote:
<br>
<p><span class="quotelev1">&gt; It seems that mpirun adds /usr/lib64 at the beginning of the
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH environment variable (/usr/lib64 usually corresponds  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; /usr/lib on non-amd64 systems):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ env | grep LIB
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/home/ingo/opt/lib:/home/ingo/opt32/lib:/home/ingo/ 
</span><br>
<span class="quotelev1">&gt; opt/gcc/lib64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun env | grep LIB
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/lib64:/home/ingo/opt/lib:/home/ingo/opt32/lib:/ 
</span><br>
<span class="quotelev1">&gt; home/ingo/opt/gcc/lib64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would normally not be a problem, but I am trying to overload some
</span><br>
<span class="quotelev1">&gt; libraries in the /usr/lib64 directory in order to use the debugging  
</span><br>
<span class="quotelev1">&gt; STL
</span><br>
<span class="quotelev1">&gt; of gcc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why is /usr/lib64 added to the library path? Is there a reason for it?
</span><br>
<span class="quotelev1">&gt; Or is it some configuration error on my system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5645.php">Jeff Squyres: "Re: [OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="5643.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Internals &amp; Static-Analysis."</a>
<li><strong>In reply to:</strong> <a href="5639.php">Ingo Josopait: "[OMPI users] Leading /usr/lib64 in LD_LIBRARY_PATH"</a>
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
