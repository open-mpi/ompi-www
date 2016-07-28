<?
$subject_val = "Re: [OMPI users] using specific algorithm for collective communication, and knowing the root cpu?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 12:09:29 2009" -->
<!-- isoreceived="20091103170929" -->
<!-- sent="Tue, 3 Nov 2009 12:09:18 -0500" -->
<!-- isosent="20091103170918" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using specific algorithm for collective communication, and knowing the root cpu?" -->
<!-- id="E59919B2-42C1-49AF-803A-AB4450609A44_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AEEE417.7090105_at_markomanolis.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] using specific algorithm for collective communication, and knowing the root cpu?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-03 12:09:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11057.php">Mohamed Adel: "[OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>Previous message:</strong> <a href="11055.php">Jeff Squyres: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="11048.php">George Markomanolis: "[OMPI users] using specific algorithm for collective communication, and knowing the root cpu?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can add the following MCA parameters either on the command line or  
<br>
in the $(HOME)/.openmpi/mca-params.conf file.
<br>
<p>On Nov 2, 2009, at 08:52 , George Markomanolis wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to ask about collective communication. With debug mode  
</span><br>
<span class="quotelev1">&gt; enabled, I can see many info during the execution which algorithm is  
</span><br>
<span class="quotelev1">&gt; used etc. But my question is that I would like to use a specific  
</span><br>
<span class="quotelev1">&gt; algorithm (the simplest I suppose). I am profiling some applications  
</span><br>
<span class="quotelev1">&gt; and I want to simulate them with another program so I must be able  
</span><br>
<span class="quotelev1">&gt; to know for example what the mpi_allreduce is doing. I saw many  
</span><br>
<span class="quotelev1">&gt; algorithms that depend on the message size and the number of  
</span><br>
<span class="quotelev1">&gt; processors, so I would like to ask:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) what is the way to say at open mpi to use a simple algorithm for  
</span><br>
<span class="quotelev1">&gt; allreduce (is there any way to say to use the simplest algorithm for  
</span><br>
<span class="quotelev1">&gt; all the collective communication?). Basically I would like to know  
</span><br>
<span class="quotelev1">&gt; the root cpu for every collective communication. What are the  
</span><br>
<span class="quotelev1">&gt; disadvantages for demanding the simplest algorithm?
</span><br>
<p>coll_tuned_use_dynamic_rules=1 to allow you to manually set the  
<br>
algorithms to be used.
<br>
coll_tuned_allreduce_algorithm=*something between 0 and 5* to describe  
<br>
the algorithm to be user. For the simplest algorithm I guess you will  
<br>
want to use 1 (star based fan-in fan-out).
<br>
<p>The main disadvantage is that the cost of the allreduce will raise  
<br>
which will negatively impact the overall performance of the application.
<br>
<p><span class="quotelev1">&gt; 2) Is there any overhead because I installed open mpi with debug  
</span><br>
<span class="quotelev1">&gt; mode even if I just run a program without any flag with --mca?
</span><br>
<p>There are many overhead because you compile in debug mode. We do a lot  
<br>
of extra tracking of internally allocate memory, checks on most/all  
<br>
internal objects and so on. Based on previous results I would say your  
<br>
latency increase by about 2-3 micro-secs, but the impact on the  
<br>
bandwidth is minimal.
<br>
<p><span class="quotelev1">&gt; 3) How you could describe allreduce by words? Can we say that the  
</span><br>
<span class="quotelev1">&gt; root cpu does reduce and then broadcast? I mean is that right for  
</span><br>
<span class="quotelev1">&gt; your implementation? I saw that it depends on the algorithm which  
</span><br>
<span class="quotelev1">&gt; cpu is the root, so is it possible to use an algorithm that I will  
</span><br>
<span class="quotelev1">&gt; know every time that cpu with rank 0 is the root?
</span><br>
<p>Exactly, allreduce = reduce + bcast (and btw this is what the  
<br>
algorithm basic will do). However, there is no root in an allreduce as  
<br>
all processors execute symmetric work. Of course if one see the  
<br>
allreduce as a reduce followed by a broadcast then one has to select a  
<br>
root (I guess we pick the rank 0 in our implementation).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt; George
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
<li><strong>Next message:</strong> <a href="11057.php">Mohamed Adel: "[OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>Previous message:</strong> <a href="11055.php">Jeff Squyres: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="11048.php">George Markomanolis: "[OMPI users] using specific algorithm for collective communication, and knowing the root cpu?"</a>
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
