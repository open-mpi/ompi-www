<?
$subject_val = "[OMPI users] compiling C++ programs in windows";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 21 11:01:06 2010" -->
<!-- isoreceived="20100321150106" -->
<!-- sent="Sun, 21 Mar 2010 12:00:58 -0300" -->
<!-- isosent="20100321150058" -->
<!-- name="Bloom Broker" -->
<!-- email="bloombroker_at_[hidden]" -->
<!-- subject="[OMPI users] compiling C++ programs in windows" -->
<!-- id="526247271003210800v762a33e9r623210de0d0b954e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] compiling C++ programs in windows<br>
<strong>From:</strong> Bloom Broker (<em>bloombroker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-21 11:00:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12391.php">Addepalli, Srirangam V: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12389.php">ananda.mudar_at_[hidden]: "[OMPI users] top command output shows huge CPU utilization when openmpi processes resume after the checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12392.php">Shiqing Fan: "Re: [OMPI users] compiling C++ programs in windows"</a>
<li><strong>Reply:</strong> <a href="12392.php">Shiqing Fan: "Re: [OMPI users] compiling C++ programs in windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
when looking at
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/01/11892.php">http://www.open-mpi.org/community/lists/users/2010/01/11892.php</a>, I realized
<br>
I have the same exact error when linkin C++ programs (error LNK2019:
<br>
unresolved external symbol &quot;void
<br>
<span class="quotelev1">&gt; __cdecl MPI::InitializeIntercepts(void)&quot;
</span><br>
<span class="quotelev1">&gt; (?InitializeIntercepts_at_MPI@@YAXXZ)
</span><br>
<span class="quotelev1">&gt; referenced in function &quot;void __cdecl MPI::Real_init(void)&quot;
</span><br>
<span class="quotelev1">&gt; (?Real_init_at_MPI@@YAXXZ)mpi_gather.exe : fatal error LNK1120: 1
</span><br>
<span class="quotelev1">&gt; unresolved externals)
</span><br>
<p>Did someone manage to get around this ? I managed to get openmpi working on
<br>
linux with C++ programs, but no chance with windows....would be glad to get
<br>
some help on this.
<br>
Thanks
<br>
Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12390/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12391.php">Addepalli, Srirangam V: "Re: [OMPI users] top command output shows huge CPU utilization when	openmpi processes resume after the checkpoint"</a>
<li><strong>Previous message:</strong> <a href="12389.php">ananda.mudar_at_[hidden]: "[OMPI users] top command output shows huge CPU utilization when openmpi processes resume after the checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12392.php">Shiqing Fan: "Re: [OMPI users] compiling C++ programs in windows"</a>
<li><strong>Reply:</strong> <a href="12392.php">Shiqing Fan: "Re: [OMPI users] compiling C++ programs in windows"</a>
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
