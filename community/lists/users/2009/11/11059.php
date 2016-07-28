<?
$subject_val = "Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 12:47:10 2009" -->
<!-- isoreceived="20091104174710" -->
<!-- sent="Wed, 04 Nov 2009 18:46:24 +0100" -->
<!-- isosent="20091104174624" -->
<!-- name="George Markomanolis" -->
<!-- email="george_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?" -->
<!-- id="4AF1BDF0.1050604_at_markomanolis.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.19.1257354011.28574.users_at_open-mpi.org" -->
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
<strong>From:</strong> George Markomanolis (<em>george_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-04 12:46:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11060.php">Sergio Díaz: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>Previous message:</strong> <a href="11058.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11080.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?"</a>
<li><strong>Reply:</strong> <a href="11080.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear George,
<br>
<p>Thanks for the answer,
<br>
I have some questions, because I am using some programs for profiling, 
<br>
when you say that the cost of allreduce raise you mean about the time 
<br>
only or also and the flops of this command? Is there some additional 
<br>
work added at the allreduce or it's only about time? During profiling I 
<br>
want to count the flops so if there is a small difference on timing 
<br>
because of debug mode and declaration of the allreduce algorithm is not 
<br>
so big deal, but if it changes also the flops then it is bad for me. 
<br>
When I executed a program with debug mode I saw that openmpi uses some 
<br>
algorithms and I looked at your code and I saw that rank 0 is not always 
<br>
the root cpu (if I understood right). Finally do you have any opinion 
<br>
about which is the best way to know the algorithm is used in collective 
<br>
communication and the root cpu of the communication?
<br>
<p>Best regards,
<br>
George
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Re: using specific algorithm for collective	communication,
</span><br>
<span class="quotelev1">&gt;       and knowing the root cpu? (George Bosilca)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Tue, 3 Nov 2009 12:09:18 -0500
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] using specific algorithm for collective
</span><br>
<span class="quotelev1">&gt; 	communication, and knowing the root cpu?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;E59919B2-42C1-49AF-803A-AB4450609A44_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can add the following MCA parameters either on the command line or  
</span><br>
<span class="quotelev1">&gt; in the $(HOME)/.openmpi/mca-params.conf file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 2, 2009, at 08:52 , George Markomanolis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to ask about collective communication. With debug mode  
</span><br>
<span class="quotelev2">&gt;&gt; enabled, I can see many info during the execution which algorithm is  
</span><br>
<span class="quotelev2">&gt;&gt; used etc. But my question is that I would like to use a specific  
</span><br>
<span class="quotelev2">&gt;&gt; algorithm (the simplest I suppose). I am profiling some applications  
</span><br>
<span class="quotelev2">&gt;&gt; and I want to simulate them with another program so I must be able  
</span><br>
<span class="quotelev2">&gt;&gt; to know for example what the mpi_allreduce is doing. I saw many  
</span><br>
<span class="quotelev2">&gt;&gt; algorithms that depend on the message size and the number of  
</span><br>
<span class="quotelev2">&gt;&gt; processors, so I would like to ask:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) what is the way to say at open mpi to use a simple algorithm for  
</span><br>
<span class="quotelev2">&gt;&gt; allreduce (is there any way to say to use the simplest algorithm for  
</span><br>
<span class="quotelev2">&gt;&gt; all the collective communication?). Basically I would like to know  
</span><br>
<span class="quotelev2">&gt;&gt; the root cpu for every collective communication. What are the  
</span><br>
<span class="quotelev2">&gt;&gt; disadvantages for demanding the simplest algorithm?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; coll_tuned_use_dynamic_rules=1 to allow you to manually set the  
</span><br>
<span class="quotelev1">&gt; algorithms to be used.
</span><br>
<span class="quotelev1">&gt; coll_tuned_allreduce_algorithm=*something between 0 and 5* to describe  
</span><br>
<span class="quotelev1">&gt; the algorithm to be user. For the simplest algorithm I guess you will  
</span><br>
<span class="quotelev1">&gt; want to use 1 (star based fan-in fan-out).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The main disadvantage is that the cost of the allreduce will raise  
</span><br>
<span class="quotelev1">&gt; which will negatively impact the overall performance of the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 2) Is there any overhead because I installed open mpi with debug  
</span><br>
<span class="quotelev2">&gt;&gt; mode even if I just run a program without any flag with --mca?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are many overhead because you compile in debug mode. We do a lot  
</span><br>
<span class="quotelev1">&gt; of extra tracking of internally allocate memory, checks on most/all  
</span><br>
<span class="quotelev1">&gt; internal objects and so on. Based on previous results I would say your  
</span><br>
<span class="quotelev1">&gt; latency increase by about 2-3 micro-secs, but the impact on the  
</span><br>
<span class="quotelev1">&gt; bandwidth is minimal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 3) How you could describe allreduce by words? Can we say that the  
</span><br>
<span class="quotelev2">&gt;&gt; root cpu does reduce and then broadcast? I mean is that right for  
</span><br>
<span class="quotelev2">&gt;&gt; your implementation? I saw that it depends on the algorithm which  
</span><br>
<span class="quotelev2">&gt;&gt; cpu is the root, so is it possible to use an algorithm that I will  
</span><br>
<span class="quotelev2">&gt;&gt; know every time that cpu with rank 0 is the root?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exactly, allreduce = reduce + bcast (and btw this is what the  
</span><br>
<span class="quotelev1">&gt; algorithm basic will do). However, there is no root in an allreduce as  
</span><br>
<span class="quotelev1">&gt; all processors execute symmetric work. Of course if one see the  
</span><br>
<span class="quotelev1">&gt; allreduce as a reduce followed by a broadcast then one has to select a  
</span><br>
<span class="quotelev1">&gt; root (I guess we pick the rank 0 in our implementation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot,
</span><br>
<span class="quotelev2">&gt;&gt; George
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11060.php">Sergio Díaz: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>Previous message:</strong> <a href="11058.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11080.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?"</a>
<li><strong>Reply:</strong> <a href="11080.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication and knowing the root cpu?"</a>
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
