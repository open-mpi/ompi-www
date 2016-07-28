<?
$subject_val = "Re: [OMPI users] Not pointing to correct libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 11:33:48 2011" -->
<!-- isoreceived="20110405153348" -->
<!-- sent="Tue, 05 Apr 2011 11:35:49 -0400" -->
<!-- isosent="20110405153549" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Not pointing to correct libraries" -->
<!-- id="4D9B36D5.2040807_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E1A1A5DCF18E4C40AF5288387679A69C017748EB_at_HOLLY.ads.warwick.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Not pointing to correct libraries<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-05 11:35:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16146.php">Gus Correa: "Re: [OMPI users] Not pointing to correct libraries"</a>
<li><strong>Previous message:</strong> <a href="16144.php">Terry Dontje: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>In reply to:</strong> <a href="16143.php">Warnett, Jason: "[OMPI users] Not pointing to correct libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16146.php">Gus Correa: "Re: [OMPI users] Not pointing to correct libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not sure Fedora comes with Open MPI installed on it by default (at 
<br>
least my FC13 did not).  You may want to look at trying to install the 
<br>
Open MPI from yum or some other package mananger.  Or you can download 
<br>
the source tarball from <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>, 
<br>
build and install it yourself.
<br>
<p>--td
<br>
<p>On 04/05/2011 11:01 AM, Warnett, Jason wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running on Linux, latest version of mpi built but I've run into a 
</span><br>
<span class="quotelev1">&gt; few issues with a program which I am trying to run. It is a widely 
</span><br>
<span class="quotelev1">&gt; used open source application called LIGGGHTS so I know the code works 
</span><br>
<span class="quotelev1">&gt; and should compile, so I obviously have a setting wrong with MPI. I 
</span><br>
<span class="quotelev1">&gt; saw a similar problem in a previous post (2007), but couldn't see how 
</span><br>
<span class="quotelev1">&gt; to resolve it as I am quite new to the terminal environment in Unix 
</span><br>
<span class="quotelev1">&gt; (always been windows... until now).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the issue I am getting is the following error...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Jay_at_Jay chute_wear]$ mpirun -np 1 lmp_fedora &lt; in.chute_wear
</span><br>
<span class="quotelev1">&gt; lmp_fedora: error while loading shared libraries: libmpi_cxx.so.0: 
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I checked where stuff was pointing using the ldd command as in that 
</span><br>
<span class="quotelev1">&gt; post and found the following:
</span><br>
<span class="quotelev1">&gt;         linux-gate.so.1 =&gt;  (0x00d10000)
</span><br>
<span class="quotelev1">&gt;         libmpi_cxx.so.0 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libmpi.so.0 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib/libdl.so.2 (0x00cbe000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x007e6000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib/libutil.so.1 (0x009fa000)
</span><br>
<span class="quotelev1">&gt;         libstdc++.so.6 =&gt; /usr/lib/libstdc++.so.6 (0x04a02000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib/libm.so.6 (0x008a4000)
</span><br>
<span class="quotelev1">&gt;         libgcc_s.so.1 =&gt; /lib/libgcc_s.so.1 (0x00110000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib/libpthread.so.0 (0x00550000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib/libc.so.6 (0x003b3000)
</span><br>
<span class="quotelev1">&gt;         /lib/ld-linux.so.2 (0x00bfa000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so it is the open mpi files it isn't linking to. How can i sort this? 
</span><br>
<span class="quotelev1">&gt; I shouldn't need to edit code of the executable of LIGGGHTS I've 
</span><br>
<span class="quotelev1">&gt; compiled as I know other people are using the same thing so I guess it 
</span><br>
<span class="quotelev1">&gt; is to do with the way I installed openMPI. I did a system search and 
</span><br>
<span class="quotelev1">&gt; couldn't find a file called libmpi* anywhere... so my guess is that 
</span><br>
<span class="quotelev1">&gt; I've incorrectly installed. I have tried several ways, but could you 
</span><br>
<span class="quotelev1">&gt; tell me how to fix it/ install correctly? (embaressing if it is to do 
</span><br>
<span class="quotelev1">&gt; with a correct install...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jay
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16145/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16145/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16146.php">Gus Correa: "Re: [OMPI users] Not pointing to correct libraries"</a>
<li><strong>Previous message:</strong> <a href="16144.php">Terry Dontje: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>In reply to:</strong> <a href="16143.php">Warnett, Jason: "[OMPI users] Not pointing to correct libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16146.php">Gus Correa: "Re: [OMPI users] Not pointing to correct libraries"</a>
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
