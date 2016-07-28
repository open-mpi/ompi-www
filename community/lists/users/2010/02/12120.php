<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 22 10:22:00 2010" -->
<!-- isoreceived="20100222152200" -->
<!-- sent="Mon, 22 Feb 2010 07:23:47 -0800" -->
<!-- isosent="20100222152347" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="4B82A183.4090009_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8B762663-4BF3-42C3-AD8D-5289C9FB0D3C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-22 10:23:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12121.php">Thomas Sadowski: "[OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<li><strong>Previous message:</strong> <a href="12119.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="12119.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Jeff Squyres wrote:
<blockquote cite="mid8B762663-4BF3-42C3-AD8D-5289C9FB0D3C@cisco.com"
 type="cite">
  <pre wrap="">On Feb 21, 2010, at 10:25 AM, Rodolfo Chua wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap=""> I used openMPI compiled with the GNU (gcc) compiler to run GULP code in parallel.
 But when I try to input "mpirun -np 2 gulp &lt;input&gt;", GULP did not run in two
 processors. Can you give me any suggestion on how to compile GULP code exactly with openMPI.
  
 Below is the instruction from GULP code manual.
"If you wish to run the program in parallel using MPI then you will need to alter
 the file "getmachine" accordingly. The usual changes would be to add the "-DMPI"
 option and in some cases change the compiler name (for example tompif77/mpif90)
 or include the MPI libraries in the link stage."
    </pre>
  </blockquote>
  <pre wrap=""><!---->
I'm afraid that I don't know the GULP code in particular, but their advice is sound: adding -DMPI sounds like something specific to their code (e.g., to activate the MPI code sections).  But using mpif77 / mpif90 as your compiler name in their build process is probably the Right thing to do (e.g., instead of ifort / gfortran / pgf77 / whatever).  This should build their executable with Open MPI's support libraries linked in, etc.
  </pre>
</blockquote>
What Jeff said sounds right (as usual).&nbsp; But, I'm intrigued about one
point.&nbsp; Even if one did not compile for MPI, if you launch with "mpirun
-np 2 gulp", I would think you would still see two processes.&nbsp; They
would not be two processes of the same MPI job, but two replicas of the
same serial job.&nbsp; So, I'm curious what Rodolfo's second sentence ("But
when I try ...") means.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12121.php">Thomas Sadowski: "[OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<li><strong>Previous message:</strong> <a href="12119.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="12119.php">Jeff Squyres: "Re: [OMPI users] (no subject)"</a>
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
