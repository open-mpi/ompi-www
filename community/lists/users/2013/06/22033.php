<?
$subject_val = "Re: [OMPI users] problem with -lmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  5 14:46:31 2013" -->
<!-- isoreceived="20130605184631" -->
<!-- sent="Wed, 5 Jun 2013 18:46:25 +0000" -->
<!-- isosent="20130605184625" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with -lmpi" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F65DF96_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFGpuQqNf9G5_PeuzMiYV5W6ywuvP-ZMKiirY8Lu3eSRf0jLOg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with -lmpi<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-05 14:46:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22034.php">Ralph Castain: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<li><strong>Previous message:</strong> <a href="22032.php">Ralph Castain: "Re: [OMPI users] problem with -lmpi"</a>
<li><strong>In reply to:</strong> <a href="22031.php">Florian Beutler: "[OMPI users] problem with -lmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that this mailing list is for Open MPI -- which is a different implementation of MPI than MPICH.
<br>
<p>Ralph's answer might be correct, but we can't say for sure because we can't answer questions about MPICH here.  :-)
<br>
<p><p>On Jun 5, 2013, at 11:03 AM, Florian Beutler &lt;fbeutler_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I just installed openMPI and the installation works without any trouble. But when I want to use the mpif90 compiler, it gives me the following error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-3.2$ mpif90 -lmpi
</span><br>
<span class="quotelev1">&gt; ld: library not found for -lmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was wondering whether there is a configure flag which I forgot to set? My configure command is 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure FC=ifort MPIFC=mpif90 --prefix=/usr/local/openmpi 2&gt;&amp;1 | tee config.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so I am using the ifort compiler. I attached the output files 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using mpich-3.0.4 on Mac OS 10.8.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I set the following paths in my .bashrc file 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PATH=/usr/local/openmpi/bin:$PATH ; export PATH
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/openmpi/lib:$LD_LIBRARY_PATH ; export LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; DYLD_LIBRARY_PATH=$LD_LIBRARY_PATH ; export DYLD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any help is highly appreciated
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; florian
</span><br>
<span class="quotelev1">&gt; &lt;config_out.tar.gz&gt;&lt;make_out.tar.gz&gt;&lt;make-install_out.tar.gz&gt;_______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22034.php">Ralph Castain: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<li><strong>Previous message:</strong> <a href="22032.php">Ralph Castain: "Re: [OMPI users] problem with -lmpi"</a>
<li><strong>In reply to:</strong> <a href="22031.php">Florian Beutler: "[OMPI users] problem with -lmpi"</a>
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
