<?
$subject_val = "[OMPI users] pure static &quot;mpirun&quot; launcher";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 24 08:54:33 2012" -->
<!-- isoreceived="20120124135433" -->
<!-- sent="Tue, 24 Jan 2012 14:54:28 +0100" -->
<!-- isosent="20120124135428" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="[OMPI users] pure static &amp;quot;mpirun&amp;quot; launcher" -->
<!-- id="16F9DC7AC786F7488506CEDBB9F7298B023F966C5641_at_mailbox1.umb.sk" -->
<!-- charset="iso-8859-2" -->
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
<strong>Subject:</strong> [OMPI users] pure static &quot;mpirun&quot; launcher<br>
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-24 08:54:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18250.php">Ralph Castain: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>Previous message:</strong> <a href="18248.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18250.php">Ralph Castain: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>Reply:</strong> <a href="18250.php">Ralph Castain: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>Maybe reply:</strong> <a href="18266.php">Ilias Miroslav: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear experts,
<br>
<p>following <a href="http://www.open-mpi.org/faq/?category=building#static-build">http://www.open-mpi.org/faq/?category=building#static-build</a> I successfully build static OpenMPI library.  
<br>
Using such prepared library I succeeded in building parallel static executable - dirac.x (ldd dirac.x-not a dynamic executable).
<br>
<p>The problem remains, however,  with the mpirun (orterun) launcher. 
<br>
While on the local machine, where I compiled both static OpenMPI &amp; static dirac.x  I am able to launch parallel job
<br>
&lt;OpenMPI_static&gt;/mpirun -np 2 dirac.x ,
<br>
I can not lauch it elsewhere, because &quot;mpirun&quot; is dynamically linked, thus machine dependent:
<br>
<p>ldd mpirun:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff13792000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/x86_64-linux-gnu/libdl.so.2 (0x00007f40f8cab000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/x86_64-linux-gnu/libnsl.so.1 (0x00007f40f8a93000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/x86_64-linux-gnu/libutil.so.1 (0x00007f40f888f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/x86_64-linux-gnu/libm.so.6 (0x00007f40f860d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/x86_64-linux-gnu/libpthread.so.0 (0x00007f40f83f1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/x86_64-linux-gnu/libc.so.6 (0x00007f40f806c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007f40f8ecb000)
<br>
<p>Please how to I build &quot;pure&quot; static mpirun launcher, usable (in my case together with static dirac.x) also on other computers  ?
<br>
<p>Thanks, Miro
<br>
<p><pre>
-- 
RNDr. Miroslav Ilia&#185;, PhD.
Katedra ch&#233;mie
Fakulta pr&#237;rodn&#253;ch vied
Univerzita Mateja Bela
Tajovsk&#233;ho 40
97400 Bansk&#225; Bystrica
tel: +421 48 446 7351
email : Miroslav.Ilias_at_[hidden]
Department of Chemistry
Faculty of Natural Sciences
Matej Bel University
Tajovsk&#233;ho 40
97400 Banska Bystrica
Slovakia
tel: +421 48 446 7351
email :  Miroslav.Ilias_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18250.php">Ralph Castain: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>Previous message:</strong> <a href="18248.php">Ralph Castain: "Re: [OMPI users] localhost only"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18250.php">Ralph Castain: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>Reply:</strong> <a href="18250.php">Ralph Castain: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
<li><strong>Maybe reply:</strong> <a href="18266.php">Ilias Miroslav: "Re: [OMPI users] pure static &quot;mpirun&quot; launcher"</a>
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
