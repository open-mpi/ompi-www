<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 17 07:29:32 2005" -->
<!-- isoreceived="20050317122932" -->
<!-- sent="Thu, 17 Mar 2005 12:29:22 +0000" -->
<!-- isosent="20050317122922" -->
<!-- name="Neil Storer" -->
<!-- email="Neil.Storer_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]" -->
<!-- id="42397822.7090106_at_ecmwf.int" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20050311010627.GA2093_at_greglaptop.internal.keyresearch.com" -->
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
<strong>Date:</strong> 2005-03-17 07:29:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0026.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Previous message:</strong> <a href="0024.php">JorgeJ. Hernandez: "[O-MPI users] Information Request..."</a>
<li><strong>In reply to:</strong> <a href="0016.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0026.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0026.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greg,
<br>
<p>Be careful when you say:
<br>
<p><span class="quotelev1">&gt; The Fortrans are compatible enough that a single MPI library can deal
</span><br>
<span class="quotelev1">&gt; with all. The calling convention stuff happens to work because MPI
</span><br>
<span class="quotelev1">&gt; doesn't happen to have any calls that hit the &quot;f2c abi&quot; issue. The
</span><br>
<span class="quotelev1">&gt; underscore thing can be handled with multiple symbols for each entry
</span><br>
<span class="quotelev1">&gt; point. -- greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
We've just spent several days of debugging a large scientific code 
<br>
eventually to find that calling a routine with LOGICAL parameters that 
<br>
was compiled with *pathf90*, from a routine compiled with *pgf90* *does 
<br>
not work*.
<br>
<p>It transpires that the machine representation for fortran logicals are 
<br>
different between the two compilers, as shown below
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRUE    FALSE
<br>
pathf90       1       0
<br>
pgf90        -1       0
<br>
<p>(Note that using pgf90 options  -Munixlogical -Mnounixlogical does not 
<br>
change the value stored by pgf90 logicals)
<br>
<p>*This is an example where you have to be very careful coding and using 
<br>
an ABI.*
<br>
<p>Regards
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Neil
<br>
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
<li>text/html attachment: <a href="../../att-0025/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0026.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Previous message:</strong> <a href="0024.php">JorgeJ. Hernandez: "[O-MPI users] Information Request..."</a>
<li><strong>In reply to:</strong> <a href="0016.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0026.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
<li><strong>Reply:</strong> <a href="0026.php">Greg Lindahl: "Re: [O-MPI users] [Fwd: Re: The case for an MPI ABI]"</a>
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
