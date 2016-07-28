<?
$subject_val = "[OMPI users] Help with Binding in 1.8.8: Use only second socket";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 09:26:35 2015" -->
<!-- isoreceived="20151221142635" -->
<!-- sent="Mon, 21 Dec 2015 08:29:20 -0500" -->
<!-- isosent="20151221132920" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="[OMPI users] Help with Binding in 1.8.8: Use only second socket" -->
<!-- id="CAFb48S9C4O1VWr-E8wui-bJPF4KThz5eVXSsEO9xsfi0NsD7UA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Help with Binding in 1.8.8: Use only second socket<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-21 08:29:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28191.php">Gilles Gouaillardet: "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28189.php">Ralph Castain: "[OMPI users] Open MPI v1.10.2rc1 available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28195.php">Ralph Castain: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<li><strong>Reply:</strong> <a href="28195.php">Ralph Castain: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI Gurus,
<br>
<p>I'm currently trying to do something with Open MPI 1.8.8 that I'm pretty
<br>
sure is possible, but I'm just not smart enough to figure out. Namely, I'm
<br>
seeing some odd GPU timings and I think it's because I was dumb and assumed
<br>
the GPU was on the PCI bus next to Socket #0 as some older GPU nodes I ran
<br>
on were like that.
<br>
<p>But, a trip through lspci and lstopo has shown me that the GPU is actually
<br>
on Socket #1. These are dual socket Sandy Bridge nodes and I'd like to do
<br>
some tests where I run a 8 processes per node and those processes all land
<br>
on Socket #1.
<br>
<p>So, what I'm trying to figure out is how to have Open MPI bind processes
<br>
like that. My first thought as always is to run a helloworld job with
<br>
-report-bindings on. I can manage to do this:
<br>
<p>(1061) $ mpirun -np 8 -report-bindings -map-by core ./helloWorld.exe
<br>
[borg01z205:16306] MCW rank 4 bound to socket 0[core 4[hwt 0]]:
<br>
[././././B/././.][./././././././.]
<br>
[borg01z205:16306] MCW rank 5 bound to socket 0[core 5[hwt 0]]:
<br>
[./././././B/./.][./././././././.]
<br>
[borg01z205:16306] MCW rank 6 bound to socket 0[core 6[hwt 0]]:
<br>
[././././././B/.][./././././././.]
<br>
[borg01z205:16306] MCW rank 7 bound to socket 0[core 7[hwt 0]]:
<br>
[./././././././B][./././././././.]
<br>
[borg01z205:16306] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././.][./././././././.]
<br>
[borg01z205:16306] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
<br>
[./B/./././././.][./././././././.]
<br>
[borg01z205:16306] MCW rank 2 bound to socket 0[core 2[hwt 0]]:
<br>
[././B/././././.][./././././././.]
<br>
[borg01z205:16306] MCW rank 3 bound to socket 0[core 3[hwt 0]]:
<br>
[./././B/./././.][./././././././.]
<br>
Process    7 of    8 is on borg01z205
<br>
Process    5 of    8 is on borg01z205
<br>
Process    2 of    8 is on borg01z205
<br>
Process    3 of    8 is on borg01z205
<br>
Process    4 of    8 is on borg01z205
<br>
Process    6 of    8 is on borg01z205
<br>
Process    0 of    8 is on borg01z205
<br>
Process    1 of    8 is on borg01z205
<br>
<p>Great...but wrong socket! Is there a way to tell it to use Socket 1
<br>
instead?
<br>
<p>Note I'll be running under SLURM, so I will only have 8 processes per node,
<br>
so it shouldn't need to use Socket 0.
<br>
<pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28190/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28191.php">Gilles Gouaillardet: "Re: [OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28189.php">Ralph Castain: "[OMPI users] Open MPI v1.10.2rc1 available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28195.php">Ralph Castain: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
<li><strong>Reply:</strong> <a href="28195.php">Ralph Castain: "Re: [OMPI users] Help with Binding in 1.8.8: Use only second socket"</a>
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
