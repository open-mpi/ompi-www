<?
$subject_val = "Re: [OMPI users] pure static &quot;mpirun&quot; launcher";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 24 09:49:10 2012" -->
<!-- isoreceived="20120124144910" -->
<!-- sent="Tue, 24 Jan 2012 06:49:01 -0800" -->
<!-- isosent="20120124144901" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pure static &amp;quot;mpirun&amp;quot; launcher" -->
<!-- id="3AE6D387-0370-43A7-B1A5-E7F1C91B2161_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="16F9DC7AC786F7488506CEDBB9F7298B023F966C5641_at_mailbox1.umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] pure static &quot;mpirun&quot; launcher<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-24 09:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18251.php">Reuti: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>Previous message:</strong> <a href="18249.php">Ilias Miroslav: "[OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>In reply to:</strong> <a href="18249.php">Ilias Miroslav: "[OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18251.php">Reuti: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>Reply:</strong> <a href="18251.php">Reuti: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm a little confused. Building procs static makes sense as libraries may not be available on compute nodes. However, mpirun is only executed in one place, usually the head node where it was built. So there is less reason to build it purely static.
<br>
<p>Are you trying to move mpirun somewhere? Or is it the daemons that mpirun launches that are the real problem?
<br>
<p>Sent from my iPad
<br>
<p>On Jan 24, 2012, at 5:54 AM, Ilias Miroslav &lt;Miroslav.Ilias_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear experts,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; following <a href="http://www.open-mpi.org/faq/?category=building#static-build">http://www.open-mpi.org/faq/?category=building#static-build</a> I successfully build static OpenMPI library.  
</span><br>
<span class="quotelev1">&gt; Using such prepared library I succeeded in building parallel static executable - dirac.x (ldd dirac.x-not a dynamic executable).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem remains, however,  with the mpirun (orterun) launcher. 
</span><br>
<span class="quotelev1">&gt; While on the local machine, where I compiled both static OpenMPI &amp; static dirac.x  I am able to launch parallel job
</span><br>
<span class="quotelev1">&gt; &lt;OpenMPI_static&gt;/mpirun -np 2 dirac.x ,
</span><br>
<span class="quotelev1">&gt; I can not lauch it elsewhere, because &quot;mpirun&quot; is dynamically linked, thus machine dependent:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ldd mpirun:
</span><br>
<span class="quotelev1">&gt;        linux-vdso.so.1 =&gt;  (0x00007fff13792000)
</span><br>
<span class="quotelev1">&gt;        libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007f40f8cab000)
</span><br>
<span class="quotelev1">&gt;        libnsl.so.1 =&gt; /lib/x86_64-linux-gnu/libnsl.so.1 (0x00007f40f8a93000)
</span><br>
<span class="quotelev1">&gt;        libutil.so.1 =&gt; /lib/x86_64-linux-gnu/libutil.so.1 (0x00007f40f888f000)
</span><br>
<span class="quotelev1">&gt;        libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007f40f860d000)
</span><br>
<span class="quotelev1">&gt;        libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007f40f83f1000)
</span><br>
<span class="quotelev1">&gt;        libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007f40f806c000)
</span><br>
<span class="quotelev1">&gt;        /lib64/ld-linux-x86-64.so.2 (0x00007f40f8ecb000)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please how to I build &quot;pure&quot; static mpirun launcher, usable (in my case together with static dirac.x) also on other computers  ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Miro
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; RNDr. Miroslav Ilia&#197;&#161;, PhD.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Katedra ch&#195;&#169;mie
</span><br>
<span class="quotelev1">&gt; Fakulta pr&#195;&#173;rodn&#195;&#189;ch vied
</span><br>
<span class="quotelev1">&gt; Univerzita Mateja Bela
</span><br>
<span class="quotelev1">&gt; Tajovsk&#195;&#169;ho 40
</span><br>
<span class="quotelev1">&gt; 97400 Bansk&#195;&#161; Bystrica
</span><br>
<span class="quotelev1">&gt; tel: +421 48 446 7351
</span><br>
<span class="quotelev1">&gt; email : Miroslav.Ilias_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Department of Chemistry
</span><br>
<span class="quotelev1">&gt; Faculty of Natural Sciences
</span><br>
<span class="quotelev1">&gt; Matej Bel University
</span><br>
<span class="quotelev1">&gt; Tajovsk&#195;&#169;ho 40
</span><br>
<span class="quotelev1">&gt; 97400 Banska Bystrica
</span><br>
<span class="quotelev1">&gt; Slovakia
</span><br>
<span class="quotelev1">&gt; tel: +421 48 446 7351
</span><br>
<span class="quotelev1">&gt; email :  Miroslav.Ilias_at_[hidden]
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18251.php">Reuti: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>Previous message:</strong> <a href="18249.php">Ilias Miroslav: "[OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>In reply to:</strong> <a href="18249.php">Ilias Miroslav: "[OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18251.php">Reuti: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>Reply:</strong> <a href="18251.php">Reuti: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
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
