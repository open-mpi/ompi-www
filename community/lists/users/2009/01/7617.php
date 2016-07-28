<?
$subject_val = "Re: [OMPI users] question running on heterogeneous systems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  2 12:37:03 2009" -->
<!-- isoreceived="20090102173703" -->
<!-- sent="Fri, 2 Jan 2009 12:36:57 -0500" -->
<!-- isosent="20090102173657" -->
<!-- name="Mahmoud Payami" -->
<!-- email="mahmoud.payami_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question running on heterogeneous systems" -->
<!-- id="118b978f0901020936v79879710na6a27e92d097f5f8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="495E1FDD.9010107_at_web.de" -->
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
<strong>From:</strong> Mahmoud Payami (<em>mahmoud.payami_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-02 12:36:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7618.php">Maciej Kazulak: "[OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="7616.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7615.php">doriankrause: "Re: [OMPI users] question running on heterogeneous systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7627.php">Gus Correa: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>Reply:</strong> <a href="7627.php">Gus Correa: "Re: [OMPI users] question running on heterogeneous systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jan 2, 2009 at 9:08 AM, doriankrause &lt;doriankrause_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mahmoud Payami wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI Users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have two systems, one with Intel64 processor, and one with IA32. The OSs
</span><br>
<span class="quotelev2">&gt;&gt; on first is CentOS-86_64 and the other CentOS-i386. I installed Intel
</span><br>
<span class="quotelev2">&gt;&gt; fortran compiler 10.1 on both.  In the first I use the fce, and in the
</span><br>
<span class="quotelev2">&gt;&gt; second I use fc directories (ifortvars.sh/csh). I have compiled openmpi
</span><br>
<span class="quotelev2">&gt;&gt; separately on each machine. Now, I could not run my application whch is
</span><br>
<span class="quotelev2">&gt;&gt; compiled on ia32 machine. Should I use &quot;fc&quot; instead of &quot;fce&quot; on intel64 and
</span><br>
<span class="quotelev2">&gt;&gt; then compile openmpi with that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Could you give us some more information? What is the error message?
</span><br>
<span class="quotelev1">&gt; You said that the application is compiled for the 32 bit architecture. I'm
</span><br>
<span class="quotelev1">&gt; not used to mixing 32/64 bit architectures. Does the application run on each
</span><br>
<span class="quotelev1">&gt; host seperately?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dorian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Dear Dorian,
<br>
Thank you  for your contribution. The application, compiled on each box
<br>
separately, is ok with mpi an no problem. Recently, I had checked that a
<br>
binary file created on ia32, also works on 86_64 but the reverse is not
<br>
true. So, why not a parallel program which is compiled on ia32 box? I think,
<br>
if I configure and install openmpi using ia32 intel compiler on 86_64 box,
<br>
then it will be resolved.
<br>
I have to check it and will report the result. In present case, it is
<br>
searching for shared lib.so.0 which has some extension &quot;..ELF...64&quot;. I have
<br>
already added &quot;/usr/local/lib&quot; which contains mpi libs in LD_LIBRARY_PATH
<br>
otherwise they would not work on each box even separatey.
<br>
Bests, Happy 2009
<br>
mahmoud
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-7617/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7618.php">Maciej Kazulak: "[OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="7616.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7615.php">doriankrause: "Re: [OMPI users] question running on heterogeneous systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7627.php">Gus Correa: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>Reply:</strong> <a href="7627.php">Gus Correa: "Re: [OMPI users] question running on heterogeneous systems"</a>
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
