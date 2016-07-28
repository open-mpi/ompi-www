<?
$subject_val = "Re: [OMPI users] Embedding MPI program into a webservice ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 01:25:53 2009" -->
<!-- isoreceived="20090717052553" -->
<!-- sent="Fri, 17 Jul 2009 02:25:48 -0300" -->
<!-- isosent="20090717052548" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Embedding MPI program into a webservice ?" -->
<!-- id="e7ba66e40907162225l6841day78d68a1d6227adce_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A5FF398.7050805_at_biggjapan.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Embedding MPI program into a webservice ?<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-17 01:25:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9999.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Previous message:</strong> <a href="9997.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>In reply to:</strong> <a href="9996.php">Ashika Umanga Umagiliya: "[OMPI users] Embedding MPI program into a webservice ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9999.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Reply:</strong> <a href="9999.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Reply:</strong> <a href="10107.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do not know anything about implementing webservices, but you should
<br>
take a look at MPI-2 dynamic process management. This way, your
<br>
webservice can MPI_Comm_spawn() a brand-new set of parallel processes
<br>
doing the heavy work. This way, your webservice will act as a kind of
<br>
proxy application between the request coming from the outside world
<br>
and your parallel computing resources...
<br>
<p><p>On Fri, Jul 17, 2009 at 12:44 AM, Ashika Umanga
<br>
Umagiliya&lt;aumanga_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Greetings all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am in the design level of parallizing an SVM algorithm.We need to expose
</span><br>
<span class="quotelev1">&gt; this as a webservice.I have decided to go with Axis2/C implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please refer to : <a href="http://i30.tinypic.com/i707qq.png">http://i30.tinypic.com/i707qq.png</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As can be seen in the Figure1 , can I embedd my MPI logic in side my
</span><br>
<span class="quotelev1">&gt; Webservice ? I guess that its not possible because the webservice is
</span><br>
<span class="quotelev1">&gt; packaged as a static library (myService.so) and can not execute the
</span><br>
<span class="quotelev1">&gt; &quot;mpirun&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In Figure2, I have illustrated another alternative.In my Webservice, I
</span><br>
<span class="quotelev1">&gt; invoke my parallel program (myParallelProg) using &quot;mpirun&quot; and other
</span><br>
<span class="quotelev1">&gt; parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any good design to accomplish what I am trying to do?I think the
</span><br>
<span class="quotelev1">&gt; second is not a good design ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; umanga
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9999.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Previous message:</strong> <a href="9997.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>In reply to:</strong> <a href="9996.php">Ashika Umanga Umagiliya: "[OMPI users] Embedding MPI program into a webservice ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9999.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Reply:</strong> <a href="9999.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Reply:</strong> <a href="10107.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
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
