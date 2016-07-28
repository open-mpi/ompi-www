<?
$subject_val = "Re: [OMPI users] which -lmpi is picked?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 26 06:53:45 2008" -->
<!-- isoreceived="20080926105345" -->
<!-- sent="Fri, 26 Sep 2008 06:53:39 -0400" -->
<!-- isosent="20080926105339" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] which -lmpi is picked?" -->
<!-- id="6E98D1A3-5347-4460-9122-4D30ED90325B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="299278.94180.qm_at_web34804.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] which -lmpi is picked?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-26 06:53:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6747.php">Robert Kubrick: "[OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome"</a>
<li><strong>Previous message:</strong> <a href="6745.php">Terry Frankcombe: "Re: [OMPI users] how to install openmpi with a specific gcc"</a>
<li><strong>In reply to:</strong> <a href="6742.php">Shafagh Jafer: "[OMPI users] which -lmpi is picked?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6704.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can run &quot;mpicc --showme&quot; to see the exact underlying compiler/ 
<br>
linker command that is used (or, better yet, &quot;mpicc foo.c -o foo -- 
<br>
showme&quot;).  This will include the -L path to where the Open MPI  
<br>
libraries are installed.
<br>
<p><p>On Sep 25, 2008, at 4:13 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; I have multiple MPIs so I want to know which -lmpi is picked up by  
</span><br>
<span class="quotelev1">&gt; the openmpi wrapper compilres? How can I find out the source path of  
</span><br>
<span class="quotelev1">&gt; libmpi.so ??
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6747.php">Robert Kubrick: "[OMPI users] MPI_ERR_TRUNCATE on MPI_Testsome"</a>
<li><strong>Previous message:</strong> <a href="6745.php">Terry Frankcombe: "Re: [OMPI users] how to install openmpi with a specific gcc"</a>
<li><strong>In reply to:</strong> <a href="6742.php">Shafagh Jafer: "[OMPI users] which -lmpi is picked?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6704.php">Gus Correa: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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
