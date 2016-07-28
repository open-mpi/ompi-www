<?
$subject_val = "[OMPI users] Not pointing to correct libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 11:01:49 2011" -->
<!-- isoreceived="20110405150149" -->
<!-- sent="Tue, 5 Apr 2011 16:01:16 +0100" -->
<!-- isosent="20110405150116" -->
<!-- name="Warnett, Jason" -->
<!-- email="J.M.Warnett_at_[hidden]" -->
<!-- subject="[OMPI users] Not pointing to correct libraries" -->
<!-- id="E1A1A5DCF18E4C40AF5288387679A69C017748EB_at_HOLLY.ads.warwick.ac.uk" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Not pointing to correct libraries<br>
<strong>From:</strong> Warnett, Jason (<em>J.M.Warnett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-05 11:01:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16144.php">Terry Dontje: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Previous message:</strong> <a href="16142.php">mohd naseem: "[OMPI users] deny permission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16145.php">Terry Dontje: "Re: [OMPI users] Not pointing to correct libraries"</a>
<li><strong>Reply:</strong> <a href="16145.php">Terry Dontje: "Re: [OMPI users] Not pointing to correct libraries"</a>
<li><strong>Reply:</strong> <a href="16146.php">Gus Correa: "Re: [OMPI users] Not pointing to correct libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I am running on Linux, latest version of mpi built but I've run into a few issues with a program which I am trying to run. It is a widely used open source application called LIGGGHTS so I know the code works and should compile, so I obviously have a setting wrong with MPI. I saw a similar problem in a previous post (2007), but couldn't see how to resolve it as I am quite new to the terminal environment in Unix (always been windows... until now).
<br>
<p>So the issue I am getting is the following error...
<br>
<p>[Jay_at_Jay chute_wear]$ mpirun -np 1 lmp_fedora &lt; in.chute_wear
<br>
lmp_fedora: error while loading shared libraries: libmpi_cxx.so.0: cannot open shared object file: No such file or directory
<br>
<p>So I checked where stuff was pointing using the ldd command as in that post and found the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-gate.so.1 =&gt;  (0x00d10000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi_cxx.so.0 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0x00cbe000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x007e6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/libutil.so.1 (0x009fa000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libstdc++.so.6 =&gt; /usr/lib/libstdc++.so.6 (0x04a02000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/libm.so.6 (0x008a4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib/libgcc_s.so.1 (0x00110000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/libpthread.so.0 (0x00550000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/libc.so.6 (0x003b3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib/ld-linux.so.2 (0x00bfa000)
<br>
<p>so it is the open mpi files it isn't linking to. How can i sort this? I shouldn't need to edit code of the executable of LIGGGHTS I've compiled as I know other people are using the same thing so I guess it is to do with the way I installed openMPI. I did a system search and couldn't find a file called libmpi* anywhere... so my guess is that I've incorrectly installed. I have tried several ways, but could you tell me how to fix it/ install correctly? (embaressing if it is to do with a correct install...)
<br>
<p>Thanks
<br>
<p>Jay
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16143/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16144.php">Terry Dontje: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Previous message:</strong> <a href="16142.php">mohd naseem: "[OMPI users] deny permission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16145.php">Terry Dontje: "Re: [OMPI users] Not pointing to correct libraries"</a>
<li><strong>Reply:</strong> <a href="16145.php">Terry Dontje: "Re: [OMPI users] Not pointing to correct libraries"</a>
<li><strong>Reply:</strong> <a href="16146.php">Gus Correa: "Re: [OMPI users] Not pointing to correct libraries"</a>
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
