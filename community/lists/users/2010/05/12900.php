<?
$subject_val = "Re: [OMPI users] Fortran derived types";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  5 08:07:14 2010" -->
<!-- isoreceived="20100505120714" -->
<!-- sent="Wed, 5 May 2010 07:07:01 -0500" -->
<!-- isosent="20100505120701" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran derived types" -->
<!-- id="AFEEF089-3508-4905-85BB-7F5D843AF5EE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="p2k48b85f861005041431tad9e10d0pb933528568acd671_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran derived types<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-05 08:07:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12901.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12899.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12882.php">Vedran Coralic: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12902.php">Prentice Bisbal: "Re: [OMPI users] Fortran derived types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, you can use derived datatypes in MPI -- but be sure to read the language chapter in the MPI-2.2 spec to be aware of a series of issues with Fortran.  
<br>
<p>We're actively working on &quot;better&quot; Fortran MPI bindings that won't have issues with sending Fortran derived types (the current &quot;medium&quot; sized OMPI F90 bindings won't compile with Fortran derived types because they use function overloading to only accept a fixed number of types for MPI choice buffers).
<br>
<p><p>On May 4, 2010, at 4:31 PM, Vedran Coralic wrote:
<br>
<p><span class="quotelev1">&gt; Yes, all the component arrays of the derived type vector are of the same size, though I am not sure that that actually makes the task any easier?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspected, just as you said, that copying the data into a contiguous block of memory might be the best solution. I was hoping though that I could make it more elegant/efficient using the MPI derived type feature. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the quick response Derek
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/5/4 Cole, Derek E &lt;derek.e.cole_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Others may be able to chime in more, because I am no fortran expert, but you probably will have to copy it into a contiguous block in memory. Working with derived types is hard, especially if they are not uniform. MPI can probably technically handle it, but the programming effort is harder.  Are your arrays all equal length, same type?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Derek
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Vedran Coralic
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, May 04, 2010 3:25 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Fortran derived types
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In my Fortran 90 code I use several custom defined derived types. Amongst them is a vector of arrays, i.e. v(:)%f(:,:,:). I am wondering what the proper way of sending this data structure from one processor to another is. Is the best way to just restructure the data by copying it into a vector and sending that or is there a simpler way possible by defining an MPI derived type that can handle it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I looked into the latter myself but so far, I have only found the solution for a scalar fortran derived type and the methodology that was suggested in that case did not seem naturally extensible to the vector case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks any help you can give me!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Vedran Coralic
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Vedran Coralic
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12901.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12899.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12882.php">Vedran Coralic: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12902.php">Prentice Bisbal: "Re: [OMPI users] Fortran derived types"</a>
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
