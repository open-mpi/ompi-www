<?
$subject_val = "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 09:20:05 2010" -->
<!-- isoreceived="20100317132005" -->
<!-- sent="Wed, 17 Mar 2010 06:19:56 -0700" -->
<!-- isosent="20100317131956" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1" -->
<!-- id="4BA0D6FC.6080809_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48b85f861003162322v60879d01yf2500025e974eb62_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 09:19:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12372.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12370.php">alev mutlu: "[OMPI users] Signal code: Address not mapped (1) error"</a>
<li><strong>In reply to:</strong> <a href="12368.php">Vedran Coralic: "[OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12377.php">Vedran Coralic: "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<li><strong>Reply:</strong> <a href="12377.php">Vedran Coralic: "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/16/2010 11:22 PM, Vedran Coralic wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, I think I know what the problem is. Basically, the NAG Fortran 
</span><br>
<span class="quotelev1">&gt; compiler and its libraries are only available on the master node so 
</span><br>
<span class="quotelev1">&gt; that the remaining nodes cannot access/find the required files. From 
</span><br>
<span class="quotelev1">&gt; my understanding, the only way to fix this would be put to copy the 
</span><br>
<span class="quotelev1">&gt; NAG Fortran compiler to all of the nodes in the cluster.
</span><br>
Don't NAG provide static copies of their libraries?
<br>
Yes, if you link the dynamic libraries, you must make them visible on 
<br>
each node, with the path set in LD_LIBRARY_PATH.  On such a small 
<br>
cluster, (or with a fast shared file system), a usual way is to put them 
<br>
in a directory mounted across all nodes.
<br>
Since you talk about a &quot;work-around,&quot; you can copy the library folder to 
<br>
your own file system for each node, to check that you've got the hang of it.
<br>
The LD_LIBRARY_PATH setting can be done in your user settings so it 
<br>
doesn't affect anyone else.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12372.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12370.php">alev mutlu: "[OMPI users] Signal code: Address not mapped (1) error"</a>
<li><strong>In reply to:</strong> <a href="12368.php">Vedran Coralic: "[OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12377.php">Vedran Coralic: "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
<li><strong>Reply:</strong> <a href="12377.php">Vedran Coralic: "Re: [OMPI users] OpenMPI/NAG Fortran: Missing libf52.so.1"</a>
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
