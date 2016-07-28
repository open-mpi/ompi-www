<?
$subject_val = "Re: [OMPI users] Shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 12:33:24 2010" -->
<!-- isoreceived="20100924163324" -->
<!-- sent="Fri, 24 Sep 2010 09:31:17 -0700" -->
<!-- isosent="20100924163117" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared memory" -->
<!-- id="4C9CD255.6080501_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikEx2LafT98fvgFH-Sr_B0Zwe-nHdRZD4hoSO06_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared memory<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 12:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14327.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14325.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14321.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14328.php">Durga Choudhury: "Re: [OMPI users] Shared memory"</a>
<li><strong>Reply:</strong> <a href="14328.php">Durga Choudhury: "Re: [OMPI users] Shared memory"</a>
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
It seems to me there are two extremes.<br>
<br>
One is that you replicate the data for each process.&nbsp; This has the
disadvantage of consuming lots of memory "unnecessarily."<br>
<br>
Another extreme is that shared data is distributed over all processes.&nbsp;
This has the disadvantage of making at least some of the data less
accessible, whether in programming complexity and/or run-time
performance.<br>
<br>
I'm not familiar with Global Arrays.&nbsp; I was somewhat familiar with
HPF.&nbsp; I think the natural thing to do with those programming models is
to distribute data over all processes, which may relieve the excessive
memory consumption you're trying to address but which may also just put
you at a different "extreme" of this spectrum.<br>
<br>
The middle ground I think might make most sense would be to share data
only within a node, but to replicate the data for each node.&nbsp; There are
probably multiple ways of doing this -- possibly even GA, I don't
know.&nbsp; One way might be to use one MPI process per node, with OMP
multithreading within each process|node.&nbsp; Or (and I thought this was
the solution you were looking for), have some idea which processes are
collocal.&nbsp; Have one process per node create and initialize some shared
memory -- mmap, perhaps, or SysV shared memory.&nbsp; Then, have its peers
map the same shared memory into their address spaces.<br>
<br>
You asked what source code changes would be required.&nbsp; It depends.&nbsp; If
you're going to mmap shared memory in on each node, you need to know
which processes are collocal.&nbsp; If you're willing to constrain how
processes are mapped to nodes, this could be easy.&nbsp; (E.g., "every 4
processes are collocal".)&nbsp; If you want to discover dynamically at run
time which are collocal, it would be harder.&nbsp; The mmap stuff could be
in a stand-alone function of about a dozen lines.&nbsp; If the shared area
is allocated as one piece, substituting the single malloc() call with a
call to your mmap function should be simple.&nbsp; If you have many
malloc()s you're trying to replace, it's harder.<br>
<br>
Andrei Fokau wrote:
<blockquote
 cite="midAANLkTikEx2LafT98fvgFH-Sr_B0Zwe-nHdRZD4hoSO06@mail.gmail.com"
 type="cite"><font class="Apple-style-span"
 face="arial, helvetica, sans-serif">
  <div><font class="Apple-style-span"
 face="arial, helvetica, sans-serif">The data are read from a file and
processed before calculations begin, so I think that mapping will not
work in our case.</font></div>
  <div><font class="Apple-style-span"
 face="arial, helvetica, sans-serif"><br>
  </font></div>
Global Arrays look promising indeed. As I said, we need to put just a
part of data to the shared section. John, do you (or may be other
users) have an experience of working with GA?</font>
  <div><font class="Apple-style-span"
 face="arial, helvetica, sans-serif"><br>
  </font>
  <div>
  <div>
  <div><font class="Apple-style-span"
 face="arial, helvetica, sans-serif"><span class="Apple-style-span"
 style="font-family: arial;">
  <div></div>
  <div><a href="http://www.emsl.pnl.gov/docs/global/um/build.html">http://www.emsl.pnl.gov/docs/global/um/build.html</a></div>
  </span></font></div>
  <div><font class="Apple-style-span"
 face="arial, helvetica, sans-serif">
  <div>
  <div><i>When GA runs with MPI:</i></div>
  <div><br>
  </div>
  <div><font class="Apple-style-span" face="'courier new', monospace">MPI_Init(..)
&nbsp; &nbsp; &nbsp;! start MPI&nbsp;</font></div>
  <div><font class="Apple-style-span" face="'courier new', monospace">GA_Initialize()
&nbsp; ! start global arrays&nbsp;</font></div>
  <div><font class="Apple-style-span" face="'courier new', monospace">MA_Init(..)
&nbsp; &nbsp; &nbsp; ! start memory allocator</font></div>
  <div><font class="Apple-style-span" face="'courier new', monospace"><br>
  </font></div>
  <div><font class="Apple-style-span" face="'courier new', monospace">&nbsp;&nbsp;
.... do work</font></div>
  <div><font class="Apple-style-span" face="'courier new', monospace"><br>
  </font></div>
  <div><font class="Apple-style-span" face="'courier new', monospace">GA_Terminate()
&nbsp; &nbsp;! tidy up global arrays&nbsp;</font></div>
  <div><font class="Apple-style-span" face="'courier new', monospace">MPI_Finalize()
&nbsp; &nbsp;! tidy up MPI&nbsp;</font></div>
  <div><font class="Apple-style-span" face="'courier new', monospace">&nbsp;&nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;! exit program</font></div>
  </div>
  </font><br>
  <div class="gmail_quote">On Fri, Sep 24, 2010 at 13:44, Reuti <span
 dir="ltr">&lt;<a href="mailto:reuti@staff.uni-marburg.de">reuti@staff.uni-marburg.de</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">Am
24.09.2010 um 13:26 schrieb John Hearns:<br>
    <div class="im"><br>
&gt; On 24 September 2010 08:46, Andrei Fokau &lt;<a
 href="mailto:andrei.fokau@neutron.kth.se">andrei.fokau@neutron.kth.se</a>&gt;
wrote:<br>
&gt;&gt; We use a C-program which consumes a lot of memory per process
(up to few<br>
&gt;&gt; GB), 99% of the data being the same for each process. So for
us it would be<br>
&gt;&gt; quite reasonable to put that part of data in a shared memory.<br>
&gt;<br>
&gt; <a href="http://www.emsl.pnl.gov/docs/global/" target="_blank">http://www.emsl.pnl.gov/docs/global/</a><br>
&gt;<br>
&gt; Is this eny help? Apologies if I'm talking through my hat.<br>
    <br>
    </div>
I was also thinking of this when I read "data in a shared memory"
(besides approaches like <a
 href="http://www.kerrighed.org/wiki/index.php/Main_Page"
 target="_blank">http://www.kerrighed.org/wiki/index.php/Main_Page</a>).
Wasn't this also one idea behind "High Performance Fortran" - running
in parallel across nodes even without knowing that it's across nodes at
all while programming and access all data like it's being local.<br>
  </blockquote>
  </div>
  </div>
  </div>
  </div>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14327.php">Terry Dontje: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14325.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="14321.php">Andrei Fokau: "Re: [OMPI users] Shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14328.php">Durga Choudhury: "Re: [OMPI users] Shared memory"</a>
<li><strong>Reply:</strong> <a href="14328.php">Durga Choudhury: "Re: [OMPI users] Shared memory"</a>
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
