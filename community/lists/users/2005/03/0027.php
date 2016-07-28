<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 21 10:25:48 2005" -->
<!-- isoreceived="20050321152548" -->
<!-- sent="Mon, 21 Mar 2005 15:25:36 +0000" -->
<!-- isosent="20050321152536" -->
<!-- name="Neil Storer" -->
<!-- email="Neil.Storer_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]" -->
<!-- id="423EE770.6030502_at_ecmwf.int" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20050321021921.GE3221_at_greglaptop" -->
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
<strong>From:</strong> Neil Storer (<em>Neil.Storer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-21 10:25:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0028.php">Jeff Squyres: "[O-MPI users] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0026.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>In reply to:</strong> <a href="0026.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greg,
<br>
<p>Thank you for your e-mail. To save you the trouble of running some 
<br>
experiments, I'd like to let you know what the problem was in our case.
<br>
<p><p><p>A routine compiled with &quot;Portland&quot; called a routine compiled with 
<br>
&quot;Pathscale&quot;.
<br>
<p>A logical .TRUE. parameter was passed, so &quot;Portland&quot; passed in a &quot;-1&quot; 
<br>
(If the calling routine had been compiled with &quot;Pathscale&quot;, a &quot;+1&quot; would 
<br>
have been passed).
<br>
<p>The &quot;pathscale&quot; routine called a &quot;C&quot; routine from the MVAPICH library.
<br>
<p>The MVAPICH code said:   
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#ifndef MPI_FORT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define MPI_FORT
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Define the internal values needed for Fortran support */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Fortran logicals */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Fortran logical values */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#ifndef _CRAY
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extern MPI_Fint MPIR_F_TRUE, MPIR_F_FALSE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define MPIR_TO_FLOG(a) ((a) ? MPIR_F_TRUE : MPIR_F_FALSE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note on true and false.  This code is only an approximation.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Some systems define either true or false, and allow some or ALL other
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;patterns for the other.  This is just like C, where 0 is false and 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;anything not zero is true.  Modify this test as necessary for your
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;system.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*#define MPIR_FROM_FLOG(a) ( (a) == MPIR_F_TRUE **? 1 : 0 )*
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* CRAY Vector processors only; these are defined in /usr/include/fortran.h 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks to lmc_at_[hidden] */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define MPIR_TO_FLOG(a) (_btol(a))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define MPIR_FROM_FLOG(a) ( _ltob(&amp;(a)) )    /*(a) must be a pointer */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#endif
<br>
<p><p>Obviously *MPIR_F_TRUE was set to &quot;1&quot;*, so the &quot;MPIR_FROM_FLOG&quot; macro converted the &quot;-1&quot; to &quot;0&quot;, i.e. &quot;the Portland .TRUE. to a .FALSE.&quot;
<br>
<p>The value for MPIR_F_TRUE is probably set up in the &quot;configure&quot; stage, and as such would be set to &quot;+1&quot; for Portland and &quot;-1&quot; for Pathscale.
<br>
<p><p>So you see my original comment does still hold.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*You have to be very careful coding and using an ABI.*
<br>
<p>Regards
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Neil
<br>
<p><p>Greg Lindahl wrote:
<br>
<p><span class="quotelev1">&gt;On Thu, Mar 17, 2005 at 12:29:22PM +0000, Neil Storer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Be careful when you say:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Neil,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I think that you'll find that pathf90 accepts -1 for TRUE, so this is
</span><br>
<span class="quotelev1">&gt;easily handled by the binding for MPI. I'd have to write some test
</span><br>
<span class="quotelev1">&gt;programs to be sure, and I'll get back to you on that. I think the
</span><br>
<span class="quotelev1">&gt;difference is whether the compiler tests the sign bit or non-zero for
</span><br>
<span class="quotelev1">&gt;TRUE. I'm not sure if either our compiler or PGI's ever does
</span><br>
<span class="quotelev1">&gt;arithmetic on logical vlues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is definitely a bug in our documentation, though, thanks for
</span><br>
<span class="quotelev1">&gt;pointing that out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
+-----------------+---------------------------------+------------------+
| Neil Storer     |    Head: Systems S/W Section    | Operations Dept. |
+-----------------+---------------------------------+------------------+
| ECMWF,          | email: neil.storer_at_[hidden]    |    //=\\  //=\\  |
| Shinfield Park, | Tel:   (+44 118) 9499353        |   //   \\//   \\ |
| Reading,        |        (+44 118) 9499000 x 2353 | ECMWF            |
| Berkshire,      | Fax:   (+44 118) 9869450        | ECMWF            |
| RG2 9AX,        |                                 |   \\   //\\   // |
| UK              | URL:   <a href="http://www.ecmwf.int/">http://www.ecmwf.int/</a>    |    \\=//  \\=//  |
+--+--------------+---------------------------------+----------------+-+
   | ECMWF is the European Centre for Medium-Range Weather Forecasts |
   +-----------------------------------------------------------------+
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-0027/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0028.php">Jeff Squyres: "[O-MPI users] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0026.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>In reply to:</strong> <a href="0026.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
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
