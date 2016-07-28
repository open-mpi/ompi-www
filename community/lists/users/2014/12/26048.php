<?
$subject_val = "[OMPI users] 3. Re: Hwloc error with Openmpi 1.8.3 on AMD 64 (Brice Goglin)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 20 12:10:57 2014" -->
<!-- isoreceived="20141220171057" -->
<!-- sent="Sat, 20 Dec 2014 18:10:55 +0100" -->
<!-- isosent="20141220171055" -->
<!-- name="Sergio Manzetti" -->
<!-- email="sergio.manzetti_at_[hidden]" -->
<!-- subject="[OMPI users] 3. Re: Hwloc error with Openmpi 1.8.3 on AMD 64 (Brice Goglin)" -->
<!-- id="DUB126-W4291B4F248562E7137ED85E3680_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="mailman.25.1419094802.11673.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] 3. Re: Hwloc error with Openmpi 1.8.3 on AMD 64 (Brice Goglin)<br>
<strong>From:</strong> Sergio Manzetti (<em>sergio.manzetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-20 12:10:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26049.php">Brice Goglin: "Re: [OMPI users] 3. Re: Hwloc error with Openmpi 1.8.3 on AMD 64 (Brice Goglin)"</a>
<li><strong>Previous message:</strong> <a href="26047.php">Diego Avesani: "[OMPI users] best function to send data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26049.php">Brice Goglin: "Re: [OMPI users] 3. Re: Hwloc error with Openmpi 1.8.3 on AMD 64 (Brice Goglin)"</a>
<li><strong>Reply:</strong> <a href="26049.php">Brice Goglin: "Re: [OMPI users] 3. Re: Hwloc error with Openmpi 1.8.3 on AMD 64 (Brice Goglin)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Brice, the BIOS is the most latest. However, i wonder if this could be  a hardware error, as openmpi sources claim.  Is there any way to find out if this is a hardware error?
<br>
<p>Thanks
<br>
<p><p><span class="quotelev1">&gt; From: users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: users Digest, Vol 3074, Issue 1
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sat, 20 Dec 2014 12:00:02 -0500
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt; 	users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt; 	users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. Re: Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5
</span><br>
<span class="quotelev1">&gt;       (Jeff Squyres (jsquyres))
</span><br>
<span class="quotelev1">&gt;    2. Hwloc error with Openmpi 1.8.3 on AMD 64 (Sergio Manzetti)
</span><br>
<span class="quotelev1">&gt;    3. Re: Hwloc error with Openmpi 1.8.3 on AMD 64 (Brice Goglin)
</span><br>
<span class="quotelev1">&gt;    4. best function to send data (Diego Avesani)
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
<span class="quotelev1">&gt; Date: Fri, 19 Dec 2014 19:26:58 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI User's List&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: &quot;petsc-maint_at_[hidden]&quot; &lt;petsc-maint_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;027AB453-DE85-4F08-BDD7-A676CA90E239_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 19, 2014, at 10:44 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regarding your second point, while I do tend to agree that such issue is better addressed in the MPI Forum, the last attempt to fix this was certainly not a resounding success.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, fair enough -- but it wasn't a failure, either.  It could definitely be moved forward, but it will take time/effort, which I unfortunately don't have. I would be willing, however, to spin up someone who *does* have time/effort available to move the proposal forward.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Indeed, there is a slight window of opportunity for inconsistencies in the recursive behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You're right; it's a small window in the threading case, but a) that's the worst kind :-), and b) the non-threaded case is actually worse (because the global state can change from underneath the loop).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; But the inconsistencies were already in the code, especially in the single threaded case. As we never received any complaints related to this topic I did not deemed interesting to address them with my last commit. Moreover, the specific behavior needed by PETSc is available in Open MPI when compiled without thread support, as the only thing that &quot;protects&quot; the attributes is that global mutex.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mmmm.  Ok, I see your point.  But this is a (very) slippery slope.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For example, in ompi_attr_delete_all(), it gets the count of all attributes and then loops &lt;count&gt; times to delete each attribute.  But each attribute callback can now insert or delete attributes on that entity.  This can mean that the loop can either fail to delete an attribute (because some attribute callback already deleted it) or fail to delete *all* attributes (because some attribute callback added more).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; To be extremely precise the deletion part is always correct
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...as long as the hash map is not altered from the application (e.g., by adding or deleting another attribute during a callback).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand that you mention above that you're not worried about this case.  I'm just picking here because there is quite definitely a case where the loop is *not* correct.  PETSc apparently doesn't trigger this badness, but... like I said above, it's a (very) slippery slope.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; as it copies the values to be deleted into a temporary array before calling any callbacks (and before releasing the mutex), so we only remove what was in the object attribute hash when the function was called. Don't misunderstand we have an extremely good reason to do it this way, we need to call the callbacks in the order in which they were created (mandated by the MPI standard).
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; ompi_attr_copy_all() has similar problems -- in general, the hash that it is looping over can change underneath it.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For the copy it is a little bit more tricky, as the calling order is not imposed. Our peculiar implementation of the hash table (with array) makes the code work, with a single (possible minor) exception when the hash table itself is grown between 2 calls. However, as stated before this issue was already present in the code in single threaded cases for years. Addressing it is another 2 line patch, but I leave this exercise to an interested reader.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, thanks for that.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be clear: both the copy and the delete code could be made thread safe.  I just don't think we should be encouraging users to be exercising undefined / probably not-portable MPI code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Fri, 19 Dec 2014 20:58:46 +0100
</span><br>
<span class="quotelev1">&gt; From: Sergio Manzetti &lt;sergio.manzetti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Hwloc error with Openmpi 1.8.3 on AMD 64
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;DUB126-W2190E22E21596A1B834CF4E36B0_at_phx.gbl&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear all, when trying to run NWchem with openmpi, I get this error.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * Hwloc has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * object intersection without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 594
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there any rationale for solving this?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  		 	   		   		 	   		  
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Fri, 19 Dec 2014 21:13:19 +0100
</span><br>
<span class="quotelev1">&gt; From: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Hwloc error with Openmpi 1.8.3 on AMD 64
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;549486DF.50405_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;windows-1252&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The rationale is to read the message and do what it says :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have a look at
</span><br>
<span class="quotelev1">&gt;     www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_os_error
</span><br>
<span class="quotelev1">&gt; Try upgrading your BIOS and kernel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Otherwise install hwloc and send the output (tarball) of
</span><br>
<span class="quotelev1">&gt; hwloc-gather-topology to hwloc-users (not to OMPI users).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 19/12/2014 20:58, Sergio Manzetti a ?crit :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear all, when trying to run NWchem with openmpi, I get this error.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; ****************************************************************************
</span><br>
<span class="quotelev2">&gt; &gt; * Hwloc has encountered what looks like an error from the operating
</span><br>
<span class="quotelev2">&gt; &gt; system.
</span><br>
<span class="quotelev2">&gt; &gt; *
</span><br>
<span class="quotelev2">&gt; &gt; * object intersection without inclusion!
</span><br>
<span class="quotelev2">&gt; &gt; * Error occurred in topology.c line 594
</span><br>
<span class="quotelev2">&gt; &gt; *
</span><br>
<span class="quotelev2">&gt; &gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev2">&gt; &gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; Is there any rationale for solving this?
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26045.php">http://www.open-mpi.org/community/lists/users/2014/12/26045.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Fri, 19 Dec 2014 23:56:36 +0100
</span><br>
<span class="quotelev1">&gt; From: Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] best function to send data
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;CAG8o1y4B0uwYdTrB+SwdBra4Tbk6ih5tOeYpga8b6vs-OtYY9g_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dear all users,
</span><br>
<span class="quotelev1">&gt; I am new in MPI world.
</span><br>
<span class="quotelev1">&gt; I would like to know what is the best choice and meaning between different
</span><br>
<span class="quotelev1">&gt; function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my program I would like that each process send a vector of data to all
</span><br>
<span class="quotelev1">&gt; the other process. What do you suggest?
</span><br>
<span class="quotelev1">&gt; Is it correct MPI_Bcast or I am missing something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Subject: Digest Footer
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
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 3074, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26048/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26049.php">Brice Goglin: "Re: [OMPI users] 3. Re: Hwloc error with Openmpi 1.8.3 on AMD 64 (Brice Goglin)"</a>
<li><strong>Previous message:</strong> <a href="26047.php">Diego Avesani: "[OMPI users] best function to send data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26049.php">Brice Goglin: "Re: [OMPI users] 3. Re: Hwloc error with Openmpi 1.8.3 on AMD 64 (Brice Goglin)"</a>
<li><strong>Reply:</strong> <a href="26049.php">Brice Goglin: "Re: [OMPI users] 3. Re: Hwloc error with Openmpi 1.8.3 on AMD 64 (Brice Goglin)"</a>
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
