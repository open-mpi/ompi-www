<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 18 10:47:37 2011" -->
<!-- isoreceived="20110318144737" -->
<!-- sent="Fri, 18 Mar 2011 09:06:04 -0400" -->
<!-- isosent="20110318130604" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.x segfault as regular user" -->
<!-- id="4D8358BC.2040905_at_ias.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1416D431-E640-4616-9871-26081F3F1185_at_cisco.com" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-18 09:06:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15913.php">Terry Dontje: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Previous message:</strong> <a href="15911.php">Jeff Squyres: "Re: [OMPI users] OMPI free() error"</a>
<li><strong>In reply to:</strong> <a href="15895.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15916.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Reply:</strong> <a href="15916.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's not hard to test whether or not SELinux is the problem. You can
<br>
turn SELinux off on the command-line with this command:
<br>
<p>setenforce 0
<br>
<p>Of course, you need to be root in order to do this.
<br>
<p>After turning SELinux off, you can try reproducing the error. If it
<br>
still occurs, it's SELinux, if it doesn't the problem is elswhere. When
<br>
your done, you can reenable SELinux with
<br>
<p>setenforce 1
<br>
<p>If you're running your job across multiple nodes, you should disable
<br>
SELinux on all of them for testing.
<br>
<p>Did you compile/install Open MPI yourself? If so, I suspect that you
<br>
have the SELinux context labels on your MPI binaries are incorrect.
<br>
<p>If you use the method above to determine that SELinux is the problem,
<br>
please post your results here and I may be able to help you set things
<br>
right. I have some experience with SELinux problems like this, but I'm
<br>
not exactly an expert.
<br>
<p><pre>
--
Prentice
On 03/17/2011 11:01 AM, Jeff Squyres wrote:
&gt; Sorry for the delayed reply.
&gt; 
&gt; I'm afraid I haven't done much with SE Linux -- I don't know if there are any &quot;gotchas&quot; that would show up there.  SE Linux support is not something we've gotten a lot of request for.  I doubt that anyone in the community has done much testing in this area.  :-\
&gt; 
&gt; I suspect that Open MPI is trying to access something that your user (under SE Linux) doesn't have permission to.  
&gt; 
&gt; So I'm afraid I don't have much of an answer for you -- sorry!  If you do figure it out, though, if a fix is not too intrusive, we can probably incorporate it upstream.
&gt; 
&gt; 
&gt; On Mar 4, 2011, at 7:31 AM, Youri LACAN-BARTLEY wrote:
&gt; 
&gt;&gt; Hi,
&gt;&gt;  
&gt;&gt; This is my first post to this mailing-list so I apologize for maybe being a little rough on the edges.
&gt;&gt; I&#146;ve been digging into OpenMPI for a little while now and have come across one issue that I just can&#146;t explain and I&#146;m sincerely hoping someone can put me on the right track here.
&gt;&gt;  
&gt;&gt; I&#146;m using a fresh install of openmpi-1.2.7 and I systematically get a segmentation fault at the end of my mpirun calls if I&#146;m logged in as a regular user.
&gt;&gt; However, as soon as I switch to the root account, the segfault does not appear.
&gt;&gt; The jobs actually run to their term but I just can&#146;t find a good reason for this to be happening and I haven&#146;t been able to reproduce the problem on another machine.
&gt;&gt;  
&gt;&gt; Any help or tips would be greatly appreciated.
&gt;&gt;  
&gt;&gt; Thanks,
&gt;&gt;  
&gt;&gt; Youri LACAN-BARTLEY
&gt;&gt;  
&gt;&gt; Here&#146;s an example running osu_latency locally (I&#146;ve &#147;blacklisted&#148; openib to make sure it&#146;s not to blame):
&gt;&gt;  
&gt;&gt; [user_at_server ~]$ mpirun --mca btl ^openib  -np 2 /opt/scripts/osu_latency-openmpi-1.2.7
&gt;&gt; # OSU MPI Latency Test v3.3
&gt;&gt; # Size            Latency (us)
&gt;&gt; 0                         0.76
&gt;&gt; 1                         0.89
&gt;&gt; 2                         0.89
&gt;&gt; 4                         0.89
&gt;&gt; 8                         0.89
&gt;&gt; 16                        0.91
&gt;&gt; 32                        0.91
&gt;&gt; 64                        0.92
&gt;&gt; 128                       0.96
&gt;&gt; 256                       1.13
&gt;&gt; 512                       1.31
&gt;&gt; 1024                      1.69
&gt;&gt; 2048                      2.51
&gt;&gt; 4096                      5.34
&gt;&gt; 8192                      9.16
&gt;&gt; 16384                    17.47
&gt;&gt; 32768                    31.79
&gt;&gt; 65536                    51.10
&gt;&gt; 131072                   92.41
&gt;&gt; 262144                  181.74
&gt;&gt; 524288                  512.26
&gt;&gt; 1048576                1238.21
&gt;&gt; 2097152                2280.28
&gt;&gt; 4194304                4616.67
&gt;&gt; [server:15586] *** Process received signal ***
&gt;&gt; [server:15586] Signal: Segmentation fault (11)
&gt;&gt; [server:15586] Signal code: Address not mapped (1)
&gt;&gt; [server:15586] Failing at address: (nil)
&gt;&gt; [server:15586] [ 0] /lib64/libpthread.so.0 [0x3cd1e0eb10]
&gt;&gt; [server:15586] [ 1] /lib64/libc.so.6 [0x3cd166fdc9]
&gt;&gt; [server:15586] [ 2] /lib64/libc.so.6(__libc_malloc+0x167) [0x3cd1674dd7]
&gt;&gt; [server:15586] [ 3] /lib64/ld-linux-x86-64.so.2(__tls_get_addr+0xb1) [0x3cd120fe61]
&gt;&gt; [server:15586] [ 4] /lib64/libselinux.so.1 [0x3cd320f5cc]
&gt;&gt; [server:15586] [ 5] /lib64/libselinux.so.1 [0x3cd32045df]
&gt;&gt; [server:15586] *** End of error message ***
&gt;&gt; [server:15587] *** Process received signal ***
&gt;&gt; [server:15587] Signal: Segmentation fault (11)
&gt;&gt; [server:15587] Signal code: Address not mapped (1)
&gt;&gt; [server:15587] Failing at address: (nil)
&gt;&gt; [server:15587] [ 0] /lib64/libpthread.so.0 [0x3cd1e0eb10]
&gt;&gt; [server:15587] [ 1] /lib64/libc.so.6 [0x3cd166fdc9]
&gt;&gt; [server:15587] [ 2] /lib64/libc.so.6(__libc_malloc+0x167) [0x3cd1674dd7]
&gt;&gt; [server:15587] [ 3] /lib64/ld-linux-x86-64.so.2(__tls_get_addr+0xb1) [0x3cd120fe61]
&gt;&gt; [server:15587] [ 4] /lib64/libselinux.so.1 [0x3cd320f5cc]
&gt;&gt; [server:15587] [ 5] /lib64/libselinux.so.1 [0x3cd32045df]
&gt;&gt; [server:15587] *** End of error message ***
&gt;&gt; mpirun noticed that job rank 0 with PID 15586 on node server exited on signal 11 (Segmentation fault).
&gt;&gt; 1 additional process aborted (not shown)
&gt;&gt; [server:15583] *** Process received signal ***
&gt;&gt; [server:15583] Signal: Segmentation fault (11)
&gt;&gt; [server:15583] Signal code: Address not mapped (1)
&gt;&gt; [server:15583] Failing at address: (nil)
&gt;&gt; [server:15583] [ 0] /lib64/libpthread.so.0 [0x3cd1e0eb10]
&gt;&gt; [server:15583] [ 1] /lib64/libc.so.6 [0x3cd166fdc9]
&gt;&gt; [server:15583] [ 2] /lib64/libc.so.6(__libc_malloc+0x167) [0x3cd1674dd7]
&gt;&gt; [server:15583] [ 3] /lib64/ld-linux-x86-64.so.2(__tls_get_addr+0xb1) [0x3cd120fe61]
&gt;&gt; [server:15583] [ 4] /lib64/libselinux.so.1 [0x3cd320f5cc]
&gt;&gt; [server:15583] [ 5] /lib64/libselinux.so.1 [0x3cd32045df]
&gt;&gt; [server:15583] *** End of error message ***
&gt;&gt; Segmentation fault
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15913.php">Terry Dontje: "Re: [OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Previous message:</strong> <a href="15911.php">Jeff Squyres: "Re: [OMPI users] OMPI free() error"</a>
<li><strong>In reply to:</strong> <a href="15895.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15916.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Reply:</strong> <a href="15916.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
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
