<?
$subject_val = "Re: [OMPI users] MPI_PROC_NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 09:23:18 2009" -->
<!-- isoreceived="20090213142318" -->
<!-- sent="Fri, 13 Feb 2009 15:23:13 +0100" -->
<!-- isosent="20090213142313" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_PROC_NULL" -->
<!-- id="9b0da5ce0902130623m1da4d605k46b79eb565678e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8537D19D-7C57-4AC3-9382-A370FC832551_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_PROC_NULL<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 09:23:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8065.php">Gary Draving: "[OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<li><strong>Previous message:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>In reply to:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was run only locally.
<br>
Here at home i only have one computer.
<br>
<p>But indeed i hadn't set the $LD_LIBRARY_PATH to /opt/openmpi/lib.
<br>
After i did so, the error didn't occur anymore with the short call.
<br>
<p>It looks like the libraries to run with were from
<br>
&nbsp;&nbsp;/usr/lib/openmpi/1.2.4-gcc/
<br>
Apparently i hadn't properly removed an old openmpi version which
<br>
had been put there by fedora...
<br>
<p>Thanks!
<br>
<p>Jody
<br>
<p>On Fri, Feb 13, 2009 at 2:39 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; What is your PATH / LD_LIBRARY_PATH when you rsh/ssh to other nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh othernode which mpirun
</span><br>
<span class="quotelev1">&gt; ssh othernode env | grep PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 13, 2009, at 5:11 AM, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well all i do seems to verify that only one version is running:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_localhost 3D]$ ls -ld /opt/openmp*
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx 1 root root   26 2009-02-13 14:09 /opt/openmpi -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-1.3.1a0r20534
</span><br>
<span class="quotelev2">&gt;&gt; drwxr-xr-x 7 root root 4096 2009-02-12 22:19 /opt/openmpi-1.3.1a0r20432
</span><br>
<span class="quotelev2">&gt;&gt; drwxr-xr-x 7 root root 4096 2009-02-12 21:58 /opt/openmpi-1.3.1a0r20520
</span><br>
<span class="quotelev2">&gt;&gt; drwxr-xr-x 7 root root 4096 2009-02-13 13:46 /opt/openmpi-1.3.1a0r20534
</span><br>
<span class="quotelev2">&gt;&gt; drwxr-xr-x 7 root root 4096 2009-02-12 22:41 /opt/openmpi-1.4a1r20525
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_localhost 3D]$ echo $PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/bin:/opt/jdk/jdk1.6.0_07/bin:/opt/jdk/jdk1.6.0_07/bin:/opt/jdk/jdk1.6.0_07/bin:/usr/kerberos/bin:/usr/lib/ccache:/usr/local/bin:/usr/bin:/bin:/usr/X11R6/bin:/home/jody/bin:/home/jody/utils
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_localhost 3D]$ which mpirun
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_localhost 3D]$ mpirun --version
</span><br>
<span class="quotelev2">&gt;&gt; mpirun (Open MPI) 1.3.1a0r20534
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_localhost 3D]$ /opt/openmpi-1.3.1a0r20534/bin/mpirun --version
</span><br>
<span class="quotelev2">&gt;&gt; mpirun (Open MPI) 1.3.1a0r20534
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_localhost 3D]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW the same strange misbehaviour happen with the other versions
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Feb 13, 2009 at 1:54 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Forgot to add.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i have /opt/openmpi/bin in my $PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried around some more and found that it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also works without errors if use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/bin/mpirun -np 2 ./sr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't understand this,  because 'mpirun' alone should be the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thing:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jody_at_localhost 3D]$ which mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/bin/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You for an explanation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Feb 13, 2009 at 1:39 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, it was doing no sensible work -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It was only intended to show the error message.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I now downloaded the latest nightly tarball and installed it,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and used your version of the test programm. It works -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *if* is use the entire path to mpirun:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [jody_at_localhost 3D]$  /opt/openmpi-1.3.1a0r20534/bin/mpirun -np 2 ./sr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but if i use the name alone, i get the error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [jody_at_localhost 3D]$ mpirun -np 2 ./sr
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29285] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29285] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29285] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29285] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29286] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29286] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29286] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [localhost.localdomain:29286] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interestingly, it seems to be the same version:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [jody_at_localhost 3D]$ mpirun --version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun (Open MPI) 1.3.1a0r20534
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i.e. the version is ok.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have my Open-MPI versions installed in directories
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/openmpi-1.xxx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and create a link
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s /opt/opnmpi-1.xxx /opt/openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I do it like this so i can easily switch between different version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could the diffferent behavour of mpirun and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/openmpi-1.3.1a0r20534/bin/mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hab its cause in this setup?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Feb 13, 2009 at 1:18 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Feb 12, 2009, at 2:00 PM, jody wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; In my application i use MPI_PROC_NULL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; as an argument in MPI_Sendrecv to simplify the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; program (i.e. no special cases for borders)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; With 1.3 it works, but under 1.3.1a0r20520
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; i get the following error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [jody_at_localhost 3D]$ mpirun -np 2 ./sr
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [localhost.localdomain:29253] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [localhost.localdomain:29253] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [localhost.localdomain:29253] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [localhost.localdomain:29253] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [localhost.localdomain:29252] *** An error occurred in MPI_Sendrecv
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [localhost.localdomain:29252] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [localhost.localdomain:29252] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [localhost.localdomain:29252] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Your program as written should hang, right?  You're trying to receive
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MCW rank 1 and no process is sending.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I slightly modified your code:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main() {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  int iRank;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  int iSize;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Status st;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;iSize);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;iRank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  if (1 == iRank) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPI_Send(&amp;iSize, 1, MPI_INT, 0, 77, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  } else if (0 == iRank) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPI_Sendrecv(&amp;iRank, 1, MPI_INT, MPI_PROC_NULL, 77,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                   &amp;iSize, 1, MPI_INT, 1, 77, MPI_COMM_WORLD, &amp;st);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  return 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And that works fine for me at the head of the v1.3 branch:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [16:17] svbu-mpi:~/svn/ompi-1.3 % svnversion .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 20538
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We did have a few bad commits on the v1.3 branch recently; could you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; try
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with a tarball from tonight, perchance?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8065.php">Gary Draving: "[OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<li><strong>Previous message:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>In reply to:</strong> <a href="8063.php">Jeff Squyres: "Re: [OMPI users] MPI_PROC_NULL"</a>
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
