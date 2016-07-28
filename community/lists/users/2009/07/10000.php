<?
$subject_val = "Re: [OMPI users] Embedding MPI program into a webservice ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 02:13:05 2009" -->
<!-- isoreceived="20090717061305" -->
<!-- sent="Fri, 17 Jul 2009 15:12:55 +0900" -->
<!-- isosent="20090717061255" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Embedding MPI program into a webservice ?" -->
<!-- id="4A601667.1030409_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="610ca1a30907162302n13748a8r64323bc2d695aa18_at_mail.gmail.com" -->
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
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-17 02:12:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10001.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Previous message:</strong> <a href="9999.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>In reply to:</strong> <a href="9999.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10001.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Reply:</strong> <a href="10001.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi prasad ,
<br>
<p>thanks you for your reply.After some googling,  I realized that you are 
<br>
a key member behind Axis2/C SAML , so saying &quot;a bit of experience&quot; is 
<br>
being too much humble :)
<br>
So nice meet a smart sri lankan in the forum.Really appropriate your 
<br>
guys great work.
<br>
<p>Cheers,
<br>
umanga
<br>
Prasadcse Perera wrote:
<br>
<span class="quotelev1">&gt; Hi, with a bit of experience I have with the Axis2/C, I think your 
</span><br>
<span class="quotelev1">&gt; second model with MPI_Comm_spawn might solve your problem. One of  
</span><br>
<span class="quotelev1">&gt; crude restriction with Axis2/C architecture is the run time service 
</span><br>
<span class="quotelev1">&gt; loading using static libs. This sometimes prevent many user needed 
</span><br>
<span class="quotelev1">&gt; handling where your logic has to be started from Invoke calls. But in 
</span><br>
<span class="quotelev1">&gt; this scenario I think the service acting as an agent to parellalize 
</span><br>
<span class="quotelev1">&gt; your task (second diagram) is the evident option that will suit your 
</span><br>
<span class="quotelev1">&gt; requeirement. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 17, 2009 at 10:55 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dalcinl_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I do not know anything about implementing webservices, but you should
</span><br>
<span class="quotelev1">&gt;     take a look at MPI-2 dynamic process management. This way, your
</span><br>
<span class="quotelev1">&gt;     webservice can MPI_Comm_spawn() a brand-new set of parallel processes
</span><br>
<span class="quotelev1">&gt;     doing the heavy work. This way, your webservice will act as a kind of
</span><br>
<span class="quotelev1">&gt;     proxy application between the request coming from the outside world
</span><br>
<span class="quotelev1">&gt;     and your parallel computing resources...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Fri, Jul 17, 2009 at 12:44 AM, Ashika Umanga
</span><br>
<span class="quotelev1">&gt;     Umagiliya&lt;aumanga_at_[hidden] &lt;mailto:aumanga_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Greetings all,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I am in the design level of parallizing an SVM algorithm.We need
</span><br>
<span class="quotelev1">&gt;     to expose
</span><br>
<span class="quotelev2">&gt;     &gt; this as a webservice.I have decided to go with Axis2/C
</span><br>
<span class="quotelev1">&gt;     implementation.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Please refer to : <a href="http://i30.tinypic.com/i707qq.png">http://i30.tinypic.com/i707qq.png</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; As can be seen in the Figure1 , can I embedd my MPI logic in side my
</span><br>
<span class="quotelev2">&gt;     &gt; Webservice ? I guess that its not possible because the webservice is
</span><br>
<span class="quotelev2">&gt;     &gt; packaged as a static library (myService.so) and can not execute the
</span><br>
<span class="quotelev2">&gt;     &gt; &quot;mpirun&quot;.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; In Figure2, I have illustrated another alternative.In my
</span><br>
<span class="quotelev1">&gt;     Webservice, I
</span><br>
<span class="quotelev2">&gt;     &gt; invoke my parallel program (myParallelProg) using &quot;mpirun&quot; and other
</span><br>
<span class="quotelev2">&gt;     &gt; parameters.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Is there any good design to accomplish what I am trying to do?I
</span><br>
<span class="quotelev1">&gt;     think the
</span><br>
<span class="quotelev2">&gt;     &gt; second is not a good design ?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;     &gt; umanga
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt;     ---------------
</span><br>
<span class="quotelev1">&gt;     Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt;     Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt;     Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt;     PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt;     Tel/Fax: +54-(0)342-451.1594
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10000/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10001.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Previous message:</strong> <a href="9999.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>In reply to:</strong> <a href="9999.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10001.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Reply:</strong> <a href="10001.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
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
