<?
$subject_val = "Re: [OMPI users] import/export issues on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 08:06:48 2010" -->
<!-- isoreceived="20100421120648" -->
<!-- sent="Wed, 21 Apr 2010 14:06:26 +0200" -->
<!-- isosent="20100421120626" -->
<!-- name="Ben.Kuppers_at_[hidden]" -->
<!-- email="Ben.Kuppers_at_[hidden]" -->
<!-- subject="Re: [OMPI users] import/export issues on Windows" -->
<!-- id="FA35C5CD419A6A499BEA69EF175460AA1EFAC6_at_amsdc1-s-02348.europe.shell.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BCEC58D.9000404_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] import/export issues on Windows<br>
<strong>From:</strong> <a href="mailto:Ben.Kuppers_at_[hidden]?Subject=Re:%20[OMPI%20users]%20import/export%20issues%20on%20Windows"><em>Ben.Kuppers_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-04-21 08:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12724.php">Conboy, James: "[OMPI users] Totalview ( tvscript ) &amp; Open MPI problem with memory debugging"</a>
<li><strong>Previous message:</strong> <a href="12722.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>In reply to:</strong> <a href="12722.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Shiqing.
<br>
<p>-Ben
<br>
<p>&nbsp;
<br>
<p>From: Shiqing Fan [mailto:fan_at_[hidden]] 
<br>
Sent: Wednesday, April 21, 2010 11:30 AM
<br>
To: Open MPI Users
<br>
Cc: Kuppers, Ben SIEP-PTT/SDRM
<br>
Subject: Re: [OMPI users] import/export issues on Windows
<br>
<p>&nbsp;
<br>
<p><p>Hi Ben,
<br>
<p>Sorry for response late.
<br>
<p>The preprocessor problem is solved now, I don't know why Intel compiler
<br>
doesn't accept such kind of definitions. But if you use the latest
<br>
trunk, it should work.
<br>
<p>I'm working on the import/export problem, and trying to fix it with a
<br>
better mechanism. I'll let you know when it's ready.
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p>On 2010-4-19 11:00 AM, Ben.Kuppers_at_[hidden] wrote: 
<br>
<p>Shiqing,
<br>
<p>&nbsp;
<br>
<p>I am having more import/export issues once I start using the openmpi
<br>
binaries that I built with the Microsoft compiler. I get unresolved
<br>
symbol errors for MPI::Comm::Comm and for MPI::Datatype::Free when I
<br>
link our own program. The C functions MPI_Comm_create and MPI_Type_free
<br>
are exported but the C++ equivalents apparently are not. Our source code
<br>
builds and runs without issues with the Linux version of openmpi.
<br>
<p>&nbsp;
<br>
<p>Do you have any suggestions?
<br>
<p>&nbsp;
<br>
<p>-Ben
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12723/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12724.php">Conboy, James: "[OMPI users] Totalview ( tvscript ) &amp; Open MPI problem with memory debugging"</a>
<li><strong>Previous message:</strong> <a href="12722.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>In reply to:</strong> <a href="12722.php">Shiqing Fan: "Re: [OMPI users] import/export issues on Windows"</a>
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
