<?
$subject_val = "Re: [OMPI users] Fortran derived types";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 17:31:56 2010" -->
<!-- isoreceived="20100504213156" -->
<!-- sent="Tue, 4 May 2010 14:31:31 -0700" -->
<!-- isosent="20100504213131" -->
<!-- name="Vedran Coralic" -->
<!-- email="vcoralic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran derived types" -->
<!-- id="p2k48b85f861005041431tad9e10d0pb933528568acd671_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="063591A1FD6A8143ACC2CA38F4C1B5EF88F09BF3_at_HVXMSPA.us.lmco.com" -->
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
<strong>From:</strong> Vedran Coralic (<em>vcoralic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 17:31:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12883.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12881.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>In reply to:</strong> <a href="12881.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12900.php">Jeff Squyres: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12900.php">Jeff Squyres: "Re: [OMPI users] Fortran derived types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, all the component arrays of the derived type vector are of the same
<br>
size, though I am not sure that that actually makes the task any easier?
<br>
<p>I suspected, just as you said, that copying the data into a contiguous block
<br>
of memory might be the best solution. I was hoping though that I could make
<br>
it more elegant/efficient using the MPI derived type feature.
<br>
<p>Thanks for the quick response Derek
<br>
<p>2010/5/4 Cole, Derek E &lt;derek.e.cole_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;  Others may be able to chime in more, because I am no fortran expert, but
</span><br>
<span class="quotelev1">&gt; you probably will have to copy it into a contiguous block in memory. Working
</span><br>
<span class="quotelev1">&gt; with derived types is hard, especially if they are not uniform. MPI can
</span><br>
<span class="quotelev1">&gt; probably technically handle it, but the programming effort is harder.  Are
</span><br>
<span class="quotelev1">&gt; your arrays all equal length, same type?
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Vedran Coralic
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, May 04, 2010 3:25 PM
</span><br>
<span class="quotelev1">&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI users] Fortran derived types
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my Fortran 90 code I use several custom defined derived types. Amongst
</span><br>
<span class="quotelev1">&gt; them is a vector of arrays, i.e. v(:)%f(:,:,:). I am wondering what the
</span><br>
<span class="quotelev1">&gt; proper way of sending this data structure from one processor to another is.
</span><br>
<span class="quotelev1">&gt; Is the best way to just restructure the data by copying it into a vector and
</span><br>
<span class="quotelev1">&gt; sending that or is there a simpler way possible by defining an MPI derived
</span><br>
<span class="quotelev1">&gt; type that can handle it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked into the latter myself but so far, I have only found the solution
</span><br>
<span class="quotelev1">&gt; for a scalar fortran derived type and the methodology that was suggested in
</span><br>
<span class="quotelev1">&gt; that case did not seem naturally extensible to the vector case.
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
<span class="quotelev1">&gt; Thanks any help you can give me!
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
Vedran Coralic
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12882/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12883.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12881.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>In reply to:</strong> <a href="12881.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12900.php">Jeff Squyres: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12900.php">Jeff Squyres: "Re: [OMPI users] Fortran derived types"</a>
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
