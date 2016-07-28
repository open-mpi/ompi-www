<?
$subject_val = "Re: [OMPI users] Embedding MPI program into a webservice ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 00:25:11 2009" -->
<!-- isoreceived="20090728042511" -->
<!-- sent="Tue, 28 Jul 2009 09:55:06 +0530" -->
<!-- isosent="20090728042506" -->
<!-- name="Prasadcse Perera" -->
<!-- email="prasadcse0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Embedding MPI program into a webservice ?" -->
<!-- id="610ca1a30907272125k1bf6acf7sf7d9c0468d18bb76_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A6E6B09.8040802_at_biggjapan.com" -->
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
<strong>From:</strong> Prasadcse Perera (<em>prasadcse0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-28 00:25:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10111.php">Ralph Castain: "Re: [OMPI users] Installation problems"</a>
<li><strong>Previous message:</strong> <a href="10109.php">Jacob Balthazor: "Re: [OMPI users] Installation problems"</a>
<li><strong>In reply to:</strong> <a href="10107.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<span class="quotelev1">&gt;From what I could see, actually you can obviate the input-parse.xml  with a
</span><br>
bit of rough work :).
<br>
<p>1. To parse the objects to the spawning processes, first wrap your objects
<br>
in to a derived data type (ex. MPI_Struct) which can be easily transferred
<br>
from the web service to the spawned children. If you are using Axis/C, then
<br>
this might be an easy map since you already have your data structs ready. So
<br>
after spawning, send your object structs to the leading process of the
<br>
spawned pool which from there you can distribute the objects to other
<br>
processes in that pool. No need to use the file at this point since theres
<br>
an inter communicator established between the webservice and the lead
<br>
process when you call MPI_Spawn. Use this correctly within webservice and
<br>
the lead process. Call 'MPI_Comm_get_parent' inside the lead child to get
<br>
the webservice intercommunicator.
<br>
<p>2. In this case, I'm not sure. But since the webservice runs only in one
<br>
instance, you dont need  it to run in several processes. So as I could see,
<br>
the main process can be a single process and it can be executed just as
<br>
./main_process without mpirun -np x commands. So this might work for you as
<br>
well when the service is loaded inside the httpserver as a single service.
<br>
I think someone can comment on this whether is it safe and acceptable to run
<br>
the main process without mpirun?
<br>
<p><p>Prasad.
<br>
<p>On Tue, Jul 28, 2009 at 8:35 AM, Ashika Umanga Umagiliya &lt;
<br>
aumanga_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Greetings all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please refer to the image at : <a href="http://i25.tinypic.com/v65ite.png">http://i25.tinypic.com/v65ite.png</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As mentioned in Lisandro's reply, my webservice is acting as a proxy to the
</span><br>
<span class="quotelev1">&gt; MPI application.
</span><br>
<span class="quotelev1">&gt; In the webservice, the SOAP parameters are bind into C++ object model.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I have several questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1) It seems MPI_Comm_spawn() command just execute the MPI programm like an
</span><br>
<span class="quotelev1">&gt; external application.
</span><br>
<span class="quotelev1">&gt; So, the C++ object-model created in webservice, is not accessible in my MPI
</span><br>
<span class="quotelev1">&gt; application.(illustrated in blue line)
</span><br>
<span class="quotelev1">&gt; If thats the case,to pass the input parameters, I have to marshal my
</span><br>
<span class="quotelev1">&gt; object-model into an XML file , then call MPI_Comm_spawn() with the filename
</span><br>
<span class="quotelev1">&gt; as an argument,so that MPI programm can read the values from the XML
</span><br>
<span class="quotelev1">&gt; file.(illustrated in red lines)
</span><br>
<span class="quotelev1">&gt; Is there any other way to do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2) Before calling MPI_Comm_spawn() in my webservice,I have to initialize
</span><br>
<span class="quotelev1">&gt; MPI by calling, MPI_Init(),MPI_Comm_get_parent()..etc.
</span><br>
<span class="quotelev1">&gt; So do I have to initialize MPI in my webservice logic.
</span><br>
<span class="quotelev1">&gt; If thats the case,I can't start my webservice in standard way like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #./svmWebservice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but in MPI way:
</span><br>
<span class="quotelev1">&gt; #mpirun -np 100 -hostfile ~./hosts svmWebservice
</span><br>
<span class="quotelev1">&gt; ??? which is confusing ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any tips?
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; umanga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; Umagiliya&lt;aumanga_at_[hidden]&gt; &lt;aumanga_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Greetings all,
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10110/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10111.php">Ralph Castain: "Re: [OMPI users] Installation problems"</a>
<li><strong>Previous message:</strong> <a href="10109.php">Jacob Balthazor: "Re: [OMPI users] Installation problems"</a>
<li><strong>In reply to:</strong> <a href="10107.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
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
