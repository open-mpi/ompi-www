<?
$subject_val = "Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 07:06:20 2008" -->
<!-- isoreceived="20080422110620" -->
<!-- sent="Tue, 22 Apr 2008 07:06:10 -0400" -->
<!-- isosent="20080422110610" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI" -->
<!-- id="480DC6A2.1020702_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.3064.1208853281.5420.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 07:06:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5437.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5435.php">koppole_at_[hidden]: "[OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Maybe in reply to:</strong> <a href="5425.php">cfdman7_at_[hidden]: "[OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Glad that worked, my comment was that your gcc.error output looked 
<br>
similar to the issues described in the faq not that the faq would solve 
<br>
the issue using the gcc compiler.  Sorry I wasn't clearer.
<br>
<p>Note, I think most of these issues are resolved in 1.3 (the current 
<br>
trunk) though I believe ticket 875 is still broke.  Hopefully to be 
<br>
fixed before the release and hopefully the faq will be updated.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Date: Mon, 21 Apr 2008 18:25:00 -0400
</span><br>
<span class="quotelev1">&gt; From: cfdman7_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with Sun Fortran Install with
</span><br>
<span class="quotelev1">&gt; 	OpenMPI
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;8CA7215ABAD78E4-15E8-1B86_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thank you. This worked, although I had to use the sun C-compiler rather than the gcc compiler (your email below seemed to imply that the fix was related to using the gcc compiler).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I appreciate the help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Mon, 21 Apr 2008 11:36 am
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with Sun Fortran Install with OpenMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the gcc.error attachment that looks to be the one of the 
</span><br>
<span class="quotelev1">&gt; problems talked about in the following faq
</span><br>
<span class="quotelev1">&gt; entry: <a href="http://www.open-mpi.org/faq/?category=building#build-sun-compilers">http://www.open-mpi.org/faq/?category=building#build-sun-compilers</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you follow the steps outlined in the above FAQ entry you should be 
</span><br>
<span class="quotelev1">&gt; able to build OpenMPI.  If not please drop another
</span><br>
<span class="quotelev1">&gt; email with the results and I'll see what I can do. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hth,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry Dontje
</span><br>
<span class="quotelev1">&gt; Sun Microsystems, Inc.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5437.php">Jeff Squyres: "Re: [OMPI users] Problems with program-execution with OpenMPI:	Orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="5435.php">koppole_at_[hidden]: "[OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Maybe in reply to:</strong> <a href="5425.php">cfdman7_at_[hidden]: "[OMPI users] Problem with Sun Fortran Install with OpenMPI"</a>
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
