<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 12:18:15 2009" -->
<!-- isoreceived="20090413161815" -->
<!-- sent="Mon, 13 Apr 2009 12:18:06 -0400" -->
<!-- isosent="20090413161806" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="49E365BE.7040002_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a599d60e0904110244y5e378bedq73e3fea69f18ad53_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-13 12:18:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8885.php">Orion Poplawski: "[OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8883.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8876.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8889.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8889.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ankush Kaul wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am able to run the program on de server node, but in de compute node 
</span><br>
<span class="quotelev1">&gt; the program only runs in the directory on which the de /work is mounted 
</span><br>
<span class="quotelev1">&gt; (/work on de server contains de Pi program).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also while running Pi it shows de process running only on server not 
</span><br>
<span class="quotelev1">&gt; compute node(using top)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Hi Ankush, list
<br>
<p>I am not sure I understand your machine setup,
<br>
but maybe it is a &quot;server&quot; machine and a &quot;compute node&quot;
<br>
somehow connected through a network
<br>
(or directly by an Ethernet cable), right?
<br>
<p>If that is the case, yes you will be able to launch a program with 
<br>
mpirun on the server machine, but it will only run in the compute node
<br>
if the work directory is mounted by the compute node.
<br>
This is the preferred way to run MPI programs.
<br>
<p>If you want to run on a directory that is not exported to and mounted on
<br>
the compute node, you have to copy over all files (executable, input 
<br>
files, etc) to that directory on the compute node.
<br>
This is not as comfortable a way to run MPI programs as the alternative
<br>
above.
<br>
<p>Moreover, you need to tell mpiexec where you want the processes to run.
<br>
There are two basic ways to do this.
<br>
You can specify the nodes on the command line with the -host option,
<br>
or you can specify them in a file with the -hostfile option.
<br>
Do &quot;mpiexec --help&quot; to learn the details.
<br>
<p>I hope this helps.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p><span class="quotelev1">&gt; On Sat, Apr 11, 2009 at 1:34 PM, Ankush Kaul &lt;ankush.rkaul_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:ankush.rkaul_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     can you please suggest a simple benchmarking software, are there any
</span><br>
<span class="quotelev1">&gt;     gui benchmarking softwares available?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On Tue, Apr 7, 2009 at 2:29 PM, Ankush Kaul &lt;ankush.rkaul_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:ankush.rkaul_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Thank you sir, thanks a lot.
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;         The information you provided helped us a lot. Am currently going
</span><br>
<span class="quotelev1">&gt;         through the OpenMPI FAQ and will contact you in case of any doubts.
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;         Regards,
</span><br>
<span class="quotelev1">&gt;         Ankush Kaul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8885.php">Orion Poplawski: "[OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8883.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="8876.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8889.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="8889.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
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
