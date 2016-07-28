<?
$subject_val = "Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 01:31:21 2009" -->
<!-- isoreceived="20091106063121" -->
<!-- sent="Fri, 6 Nov 2009 01:31:12 -0500" -->
<!-- isosent="20091106063112" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?" -->
<!-- id="43169718-23D5-4074-AC9C-6F12D70776B4_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AF1BDF0.1050604_at_markomanolis.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 01:31:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11081.php">Christoph Rackwitz: "[OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11079.php">Terry Frankcombe: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="11059.php">George Markomanolis: "Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 4, 2009, at 12:46 , George Markomanolis wrote:
<br>
<p><span class="quotelev1">&gt; I have some questions, because I am using some programs for  
</span><br>
<span class="quotelev1">&gt; profiling, when you say that the cost of allreduce raise you mean  
</span><br>
<span class="quotelev1">&gt; about the time only or also and the flops of this command? Is there  
</span><br>
<span class="quotelev1">&gt; some additional work added at the allreduce or it's only about time?  
</span><br>
<span class="quotelev1">&gt; During profiling I want to count the flops so if there is a small  
</span><br>
<span class="quotelev1">&gt; difference on timing because of debug mode and declaration of the  
</span><br>
<span class="quotelev1">&gt; allreduce algorithm is not so big deal, but if it changes also the  
</span><br>
<span class="quotelev1">&gt; flops then it is bad for me.
</span><br>
<p>Using a linear algorithm for reduce will clearly increase the number  
<br>
of fp on the root (of course if we suppose the reduction is working on  
<br>
fp), and will decrease the fp on the other nodes. Imagine that instead  
<br>
of having the computations nicely spread all over the nodes, you put  
<br>
them all on the root. This is what happens with the linear reduction.
<br>
<p><span class="quotelev1">&gt; When I executed a program with debug mode I saw that openmpi uses  
</span><br>
<span class="quotelev1">&gt; some algorithms and I looked at your code and I saw that rank 0 is  
</span><br>
<span class="quotelev1">&gt; not always the root cpu (if I understood right). Finally do you have  
</span><br>
<span class="quotelev1">&gt; any opinion about which is the best way to know the algorithm is  
</span><br>
<span class="quotelev1">&gt; used in collective communication and the root cpu of the  
</span><br>
<span class="quotelev1">&gt; communication?
</span><br>
<p>For the linear implementation of allreduce Open MPI always use the  
<br>
rank 0 in the communicator as the root. The code is in the $ 
<br>
(OMPI_SRCDIR)/ompi/mca/coll/tuned/coll_tuned_allreduce.c file at line  
<br>
895.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   1. Re: using specific algorithm for collective	communication,
</span><br>
<span class="quotelev2">&gt;&gt;      and knowing the root cpu? (George Bosilca)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 3 Nov 2009 12:09:18 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] using specific algorithm for collective
</span><br>
<span class="quotelev2">&gt;&gt; 	communication, and knowing the root cpu?
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;E59919B2-42C1-49AF-803A-AB4450609A44_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=us-ascii; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can add the following MCA parameters either on the command line  
</span><br>
<span class="quotelev2">&gt;&gt; or  in the $(HOME)/.openmpi/mca-params.conf file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 2, 2009, at 08:52 , George Markomanolis wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to ask about collective communication. With debug  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mode  enabled, I can see many info during the execution which  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; algorithm is  used etc. But my question is that I would like to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use a specific  algorithm (the simplest I suppose). I am profiling  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some applications  and I want to simulate them with another  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program so I must be able  to know for example what the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_allreduce is doing. I saw many  algorithms that depend on the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message size and the number of  processors, so I would like to ask:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) what is the way to say at open mpi to use a simple algorithm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for  allreduce (is there any way to say to use the simplest  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; algorithm for  all the collective communication?). Basically I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would like to know  the root cpu for every collective  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication. What are the  disadvantages for demanding the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simplest algorithm?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_use_dynamic_rules=1 to allow you to manually set the   
</span><br>
<span class="quotelev2">&gt;&gt; algorithms to be used.
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_allreduce_algorithm=*something between 0 and 5* to  
</span><br>
<span class="quotelev2">&gt;&gt; describe  the algorithm to be user. For the simplest algorithm I  
</span><br>
<span class="quotelev2">&gt;&gt; guess you will  want to use 1 (star based fan-in fan-out).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The main disadvantage is that the cost of the allreduce will raise   
</span><br>
<span class="quotelev2">&gt;&gt; which will negatively impact the overall performance of the  
</span><br>
<span class="quotelev2">&gt;&gt; application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) Is there any overhead because I installed open mpi with debug   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mode even if I just run a program without any flag with --mca?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are many overhead because you compile in debug mode. We do a  
</span><br>
<span class="quotelev2">&gt;&gt; lot  of extra tracking of internally allocate memory, checks on  
</span><br>
<span class="quotelev2">&gt;&gt; most/all  internal objects and so on. Based on previous results I  
</span><br>
<span class="quotelev2">&gt;&gt; would say your  latency increase by about 2-3 micro-secs, but the  
</span><br>
<span class="quotelev2">&gt;&gt; impact on the  bandwidth is minimal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) How you could describe allreduce by words? Can we say that the   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; root cpu does reduce and then broadcast? I mean is that right for   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your implementation? I saw that it depends on the algorithm which   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu is the root, so is it possible to use an algorithm that I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will  know every time that cpu with rank 0 is the root?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Exactly, allreduce = reduce + bcast (and btw this is what the   
</span><br>
<span class="quotelev2">&gt;&gt; algorithm basic will do). However, there is no root in an allreduce  
</span><br>
<span class="quotelev2">&gt;&gt; as  all processors execute symmetric work. Of course if one see  
</span><br>
<span class="quotelev2">&gt;&gt; the  allreduce as a reduce followed by a broadcast then one has to  
</span><br>
<span class="quotelev2">&gt;&gt; select a  root (I guess we pick the rank 0 in our implementation).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="11081.php">Christoph Rackwitz: "[OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11079.php">Terry Frankcombe: "Re: [OMPI users] mpirun example program fail on multiple	nodes-	unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="11059.php">George Markomanolis: "Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?"</a>
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
