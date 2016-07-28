<?
$subject_val = "Re: [OMPI users] OpenMPI - compilation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 20:52:45 2007" -->
<!-- isoreceived="20071115015245" -->
<!-- sent="Wed, 14 Nov 2007 17:49:54 -0800" -->
<!-- isosent="20071115014954" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI - compilation" -->
<!-- id="A5AC2FA3-2095-44C2-A6C3-D0F6789E6632_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9B1FD812-ECCC-41C8-A44B-D061D1CEC0F2_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI - compilation<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-14 20:49:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4469.php">Clement Kam Man Chu: "[OMPI users] Tmpdir work for first process only"</a>
<li><strong>Previous message:</strong> <a href="4467.php">George Bosilca: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>In reply to:</strong> <a href="4467.php">George Bosilca: "Re: [OMPI users] OpenMPI - compilation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of Open MPI are you using?  I see that particular error  
<br>
listed in the &quot;rmgr&quot; part of the code base, not the &quot;pls&quot; part of the  
<br>
code base in the current release (1.2.4).  Meaning: I'm guessing that  
<br>
the fact that this help message is not found in your version has been  
<br>
fixed in a later version.
<br>
<p>As George pointed out, the real issue is that the &quot;mpitest1&quot;  
<br>
executable was not found when OMPI tried to run it.  Do you have  
<br>
mpitest1 available on all nodes where you tried to run it?  (e.g., via  
<br>
NFS or some global filesystem)
<br>
<p><p>On Nov 14, 2007, at 5:08 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; The real error message hidden behind the argv0-not-accesible is:  
</span><br>
<span class="quotelev1">&gt; Failed to find or execute the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 14, 2007, at 4:08 PM, Sajjad wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Brock,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I renamed the whole file as mpitest1.c and issued the following  
</span><br>
<span class="quotelev2">&gt;&gt; command
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc mpitest1.c -o mpitest1
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 ./mpitest1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then i got the following output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt;&gt;   argv0-not-accessible
</span><br>
<span class="quotelev2">&gt;&gt; from the file:
</span><br>
<span class="quotelev2">&gt;&gt;   help-pls-base.txt
</span><br>
<span class="quotelev2">&gt;&gt; But I couldn't find any file matching that name.  Sorry!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could not  actually follow what does that mean,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Sajjad
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="4469.php">Clement Kam Man Chu: "[OMPI users] Tmpdir work for first process only"</a>
<li><strong>Previous message:</strong> <a href="4467.php">George Bosilca: "Re: [OMPI users] OpenMPI - compilation"</a>
<li><strong>In reply to:</strong> <a href="4467.php">George Bosilca: "Re: [OMPI users] OpenMPI - compilation"</a>
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
