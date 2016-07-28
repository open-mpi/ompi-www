<?
$subject_val = "Re: [OMPI users] Embedding MPI program into a webservice ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 23:06:00 2009" -->
<!-- isoreceived="20090728030600" -->
<!-- sent="Tue, 28 Jul 2009 12:05:45 +0900" -->
<!-- isosent="20090728030545" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Embedding MPI program into a webservice ?" -->
<!-- id="4A6E6B09.8040802_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40907162225l6841day78d68a1d6227adce_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-07-27 23:05:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10108.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Installation problems"</a>
<li><strong>Previous message:</strong> <a href="10106.php">George Bosilca: "Re: [OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>In reply to:</strong> <a href="9998.php">Lisandro Dalcin: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10110.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Reply:</strong> <a href="10110.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings all,
<br>
<p>Please refer to the image at : <a href="http://i25.tinypic.com/v65ite.png">http://i25.tinypic.com/v65ite.png</a>
<br>
<p>As mentioned in Lisandro's reply, my webservice is acting as a proxy to 
<br>
the MPI application.
<br>
In the webservice, the SOAP parameters are bind into C++ object model.
<br>
<p>But I have several questions:
<br>
<p>(1) It seems MPI_Comm_spawn() command just execute the MPI programm like 
<br>
an external application.
<br>
So, the C++ object-model created in webservice, is not accessible in my 
<br>
MPI application.(illustrated in blue line)
<br>
If thats the case,to pass the input parameters, I have to marshal my 
<br>
object-model into an XML file , then call MPI_Comm_spawn() with the 
<br>
filename as an argument,so that MPI programm can read the values from 
<br>
the XML file.(illustrated in red lines)
<br>
Is there any other way to do this?
<br>
<p>(2) Before calling MPI_Comm_spawn() in my webservice,I have to 
<br>
initialize MPI by calling, MPI_Init(),MPI_Comm_get_parent()..etc.
<br>
So do I have to initialize MPI in my webservice logic.
<br>
If thats the case,I can't start my webservice in standard way like:
<br>
<p>#./svmWebservice
<br>
<p>but in MPI way:
<br>
#mpirun -np 100 -hostfile ~./hosts svmWebservice                   
<br>
??? which is confusing ??
<br>
<p>Any tips?
<br>
Thanks in advance,
<br>
umanga
<br>
<p>Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; I do not know anything about implementing webservices, but you should
</span><br>
<span class="quotelev1">&gt; take a look at MPI-2 dynamic process management. This way, your
</span><br>
<span class="quotelev1">&gt; webservice can MPI_Comm_spawn() a brand-new set of parallel processes
</span><br>
<span class="quotelev1">&gt; doing the heavy work. This way, your webservice will act as a kind of
</span><br>
<span class="quotelev1">&gt; proxy application between the request coming from the outside world
</span><br>
<span class="quotelev1">&gt; and your parallel computing resources...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 17, 2009 at 12:44 AM, Ashika Umanga
</span><br>
<span class="quotelev1">&gt; Umagiliya&lt;aumanga_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Greetings all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am in the design level of parallizing an SVM algorithm.We need to expose
</span><br>
<span class="quotelev2">&gt;&gt; this as a webservice.I have decided to go with Axis2/C implementation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please refer to : <a href="http://i30.tinypic.com/i707qq.png">http://i30.tinypic.com/i707qq.png</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As can be seen in the Figure1 , can I embedd my MPI logic in side my
</span><br>
<span class="quotelev2">&gt;&gt; Webservice ? I guess that its not possible because the webservice is
</span><br>
<span class="quotelev2">&gt;&gt; packaged as a static library (myService.so) and can not execute the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpirun&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In Figure2, I have illustrated another alternative.In my Webservice, I
</span><br>
<span class="quotelev2">&gt;&gt; invoke my parallel program (myParallelProg) using &quot;mpirun&quot; and other
</span><br>
<span class="quotelev2">&gt;&gt; parameters.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any good design to accomplish what I am trying to do?I think the
</span><br>
<span class="quotelev2">&gt;&gt; second is not a good design ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; umanga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10107/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10108.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Installation problems"</a>
<li><strong>Previous message:</strong> <a href="10106.php">George Bosilca: "Re: [OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>In reply to:</strong> <a href="9998.php">Lisandro Dalcin: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10110.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Reply:</strong> <a href="10110.php">Prasadcse Perera: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
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
