<?
$subject_val = "Re: [OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 30 04:58:41 2011" -->
<!-- isoreceived="20110930085841" -->
<!-- sent="Fri, 30 Sep 2011 10:58:33 +0200" -->
<!-- isosent="20110930085833" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable" -->
<!-- id="201109301058.34423.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable" -->
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
<strong>Subject:</strong> Re: [OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-30 04:58:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17476.php">Salvatore Podda: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Previous message:</strong> <a href="17474.php">Eugene Loh: "Re: [OMPI users] MPIRUN + Environtment Variable"</a>
<li><strong>Maybe in reply to:</strong> <a href="17437.php">Rocky Dunlap: "[OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>first, please consider that the VT versions integrated in Open MPI v1.5.x and 
<br>
v1.4.x are different - respectively the names of the environment variables for 
<br>
setting a pre-created symbol list:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI v1.4.x: VT_NMFILE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI v1.5.x: VT_GNU_NMFILE
<br>
<p><p>Furthermore, make sure that the environment variable is exported to *all* MPI 
<br>
tasks. Therefor, add the option '-x &lt;env&gt;' to your mpirun command:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -x VT_GNU_NMFILE ...
<br>
<p><p>Regards,
<br>
Matthias
<br>
<p>On Monday 26 September 2011 3:19:21 you wrote:
<br>
<span class="quotelev1">&gt; According to the VampirTrace documentation, it is possible to create a
</span><br>
<span class="quotelev1">&gt; symbol list file in advance and set the name of the file in the
</span><br>
<span class="quotelev1">&gt; environment variable VT_GNU_NMFILE.  For example, you might do this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ nm hello &gt; hello.nm
</span><br>
<span class="quotelev1">&gt; $ export VT_GNU_NMFILE=&quot;hello.nm&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have set up a symbol file list as above (with full path name of
</span><br>
<span class="quotelev1">&gt; course) but when I run my VT instrumented program (via mpirun) it
</span><br>
<span class="quotelev1">&gt; appears to ignore the VT_GNU_NMFILE environment variable and run &quot;nm&quot;
</span><br>
<span class="quotelev1">&gt; automatically on startup (the default behavior).  This can be a time
</span><br>
<span class="quotelev1">&gt; consuming process, so I would prefer to use the pre-created symbol
</span><br>
<span class="quotelev1">&gt; list file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone confirm if the VT_GNU_NMFILE environment variable is
</span><br>
<span class="quotelev1">&gt; supported with the OpenMPI integration?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rocky
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17476.php">Salvatore Podda: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Previous message:</strong> <a href="17474.php">Eugene Loh: "Re: [OMPI users] MPIRUN + Environtment Variable"</a>
<li><strong>Maybe in reply to:</strong> <a href="17437.php">Rocky Dunlap: "[OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable"</a>
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
