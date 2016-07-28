<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 11:01:42 2011" -->
<!-- isoreceived="20110317150142" -->
<!-- sent="Thu, 17 Mar 2011 11:01:25 -0400" -->
<!-- isosent="20110317150125" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.x segfault as regular user" -->
<!-- id="1416D431-E640-4616-9871-26081F3F1185_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="9113A52E1096EB41B1F88DD94C4369D5B2EA6E_at_EXCHSRV.transvalor.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.2.x segfault as regular user<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-17 11:01:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15896.php">Jeff Squyres: "Re: [OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order."</a>
<li><strong>Previous message:</strong> <a href="15894.php">Jeff Squyres: "Re: [OMPI users] Segmentation faults"</a>
<li><strong>In reply to:</strong> <a href="15795.php">Youri LACAN-BARTLEY: "[OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15912.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Reply:</strong> <a href="15912.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delayed reply.
<br>
<p>I'm afraid I haven't done much with SE Linux -- I don't know if there are any &quot;gotchas&quot; that would show up there.  SE Linux support is not something we've gotten a lot of request for.  I doubt that anyone in the community has done much testing in this area.  :-\
<br>
<p>I suspect that Open MPI is trying to access something that your user (under SE Linux) doesn't have permission to.  
<br>
<p>So I'm afraid I don't have much of an answer for you -- sorry!  If you do figure it out, though, if a fix is not too intrusive, we can probably incorporate it upstream.
<br>
<p><p>On Mar 4, 2011, at 7:31 AM, Youri LACAN-BARTLEY wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This is my first post to this mailing-list so I apologize for maybe being a little rough on the edges.
</span><br>
<span class="quotelev1">&gt; I&#146;ve been digging into OpenMPI for a little while now and have come across one issue that I just can&#146;t explain and I&#146;m sincerely hoping someone can put me on the right track here.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;m using a fresh install of openmpi-1.2.7 and I systematically get a segmentation fault at the end of my mpirun calls if I&#146;m logged in as a regular user.
</span><br>
<span class="quotelev1">&gt; However, as soon as I switch to the root account, the segfault does not appear.
</span><br>
<span class="quotelev1">&gt; The jobs actually run to their term but I just can&#146;t find a good reason for this to be happening and I haven&#146;t been able to reproduce the problem on another machine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any help or tips would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Youri LACAN-BARTLEY
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here&#146;s an example running osu_latency locally (I&#146;ve &#147;blacklisted&#148; openib to make sure it&#146;s not to blame):
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [user_at_server ~]$ mpirun --mca btl ^openib  -np 2 /opt/scripts/osu_latency-openmpi-1.2.7
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v3.3
</span><br>
<span class="quotelev1">&gt; # Size            Latency (us)
</span><br>
<span class="quotelev1">&gt; 0                         0.76
</span><br>
<span class="quotelev1">&gt; 1                         0.89
</span><br>
<span class="quotelev1">&gt; 2                         0.89
</span><br>
<span class="quotelev1">&gt; 4                         0.89
</span><br>
<span class="quotelev1">&gt; 8                         0.89
</span><br>
<span class="quotelev1">&gt; 16                        0.91
</span><br>
<span class="quotelev1">&gt; 32                        0.91
</span><br>
<span class="quotelev1">&gt; 64                        0.92
</span><br>
<span class="quotelev1">&gt; 128                       0.96
</span><br>
<span class="quotelev1">&gt; 256                       1.13
</span><br>
<span class="quotelev1">&gt; 512                       1.31
</span><br>
<span class="quotelev1">&gt; 1024                      1.69
</span><br>
<span class="quotelev1">&gt; 2048                      2.51
</span><br>
<span class="quotelev1">&gt; 4096                      5.34
</span><br>
<span class="quotelev1">&gt; 8192                      9.16
</span><br>
<span class="quotelev1">&gt; 16384                    17.47
</span><br>
<span class="quotelev1">&gt; 32768                    31.79
</span><br>
<span class="quotelev1">&gt; 65536                    51.10
</span><br>
<span class="quotelev1">&gt; 131072                   92.41
</span><br>
<span class="quotelev1">&gt; 262144                  181.74
</span><br>
<span class="quotelev1">&gt; 524288                  512.26
</span><br>
<span class="quotelev1">&gt; 1048576                1238.21
</span><br>
<span class="quotelev1">&gt; 2097152                2280.28
</span><br>
<span class="quotelev1">&gt; 4194304                4616.67
</span><br>
<span class="quotelev1">&gt; [server:15586] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [server:15586] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [server:15586] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [server:15586] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [server:15586] [ 0] /lib64/libpthread.so.0 [0x3cd1e0eb10]
</span><br>
<span class="quotelev1">&gt; [server:15586] [ 1] /lib64/libc.so.6 [0x3cd166fdc9]
</span><br>
<span class="quotelev1">&gt; [server:15586] [ 2] /lib64/libc.so.6(__libc_malloc+0x167) [0x3cd1674dd7]
</span><br>
<span class="quotelev1">&gt; [server:15586] [ 3] /lib64/ld-linux-x86-64.so.2(__tls_get_addr+0xb1) [0x3cd120fe61]
</span><br>
<span class="quotelev1">&gt; [server:15586] [ 4] /lib64/libselinux.so.1 [0x3cd320f5cc]
</span><br>
<span class="quotelev1">&gt; [server:15586] [ 5] /lib64/libselinux.so.1 [0x3cd32045df]
</span><br>
<span class="quotelev1">&gt; [server:15586] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [server:15587] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [server:15587] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [server:15587] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [server:15587] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [server:15587] [ 0] /lib64/libpthread.so.0 [0x3cd1e0eb10]
</span><br>
<span class="quotelev1">&gt; [server:15587] [ 1] /lib64/libc.so.6 [0x3cd166fdc9]
</span><br>
<span class="quotelev1">&gt; [server:15587] [ 2] /lib64/libc.so.6(__libc_malloc+0x167) [0x3cd1674dd7]
</span><br>
<span class="quotelev1">&gt; [server:15587] [ 3] /lib64/ld-linux-x86-64.so.2(__tls_get_addr+0xb1) [0x3cd120fe61]
</span><br>
<span class="quotelev1">&gt; [server:15587] [ 4] /lib64/libselinux.so.1 [0x3cd320f5cc]
</span><br>
<span class="quotelev1">&gt; [server:15587] [ 5] /lib64/libselinux.so.1 [0x3cd32045df]
</span><br>
<span class="quotelev1">&gt; [server:15587] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 15586 on node server exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev1">&gt; [server:15583] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [server:15583] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [server:15583] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [server:15583] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [server:15583] [ 0] /lib64/libpthread.so.0 [0x3cd1e0eb10]
</span><br>
<span class="quotelev1">&gt; [server:15583] [ 1] /lib64/libc.so.6 [0x3cd166fdc9]
</span><br>
<span class="quotelev1">&gt; [server:15583] [ 2] /lib64/libc.so.6(__libc_malloc+0x167) [0x3cd1674dd7]
</span><br>
<span class="quotelev1">&gt; [server:15583] [ 3] /lib64/ld-linux-x86-64.so.2(__tls_get_addr+0xb1) [0x3cd120fe61]
</span><br>
<span class="quotelev1">&gt; [server:15583] [ 4] /lib64/libselinux.so.1 [0x3cd320f5cc]
</span><br>
<span class="quotelev1">&gt; [server:15583] [ 5] /lib64/libselinux.so.1 [0x3cd32045df]
</span><br>
<span class="quotelev1">&gt; [server:15583] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15896.php">Jeff Squyres: "Re: [OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order."</a>
<li><strong>Previous message:</strong> <a href="15894.php">Jeff Squyres: "Re: [OMPI users] Segmentation faults"</a>
<li><strong>In reply to:</strong> <a href="15795.php">Youri LACAN-BARTLEY: "[OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15912.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Reply:</strong> <a href="15912.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
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
