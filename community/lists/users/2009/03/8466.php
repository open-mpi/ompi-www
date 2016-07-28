<?
$subject_val = "Re: [OMPI users] Installation Problems with Openmpi-1.2.9";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 15:05:30 2009" -->
<!-- isoreceived="20090316190530" -->
<!-- sent="Mon, 16 Mar 2009 12:05:25 -0700" -->
<!-- isosent="20090316190525" -->
<!-- name="Amos Leffler" -->
<!-- email="amosleffler_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation Problems with Openmpi-1.2.9" -->
<!-- id="61b264610903161205p6d52d020o934847769eb8f0be_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6F6C3935-04E3-4839-A683-AEE0A8D1760F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Installation Problems with Openmpi-1.2.9<br>
<strong>From:</strong> Amos Leffler (<em>amosleffler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-16 15:05:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8467.php">Ralph Castain: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Previous message:</strong> <a href="8465.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>In reply to:</strong> <a href="8429.php">Jeff Squyres: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8467.php">Ralph Castain: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Reply:</strong> <a href="8467.php">Ralph Castain: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Reply:</strong> <a href="8469.php">Doug Reeder: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh and Jeff,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I found mpicc in /usr/local/lib (where I put it) and when I
<br>
tried the command &quot;ldd mpicc&quot; I got the following;
<br>
linux-f2f9:/usr/local/bin # ldd mpicc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /usr/local/lib/libopen-pal.so.0 (0x00002afcd6bf6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00002afcd6e6c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002afcd70c2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002afcd72c7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002afcd74de000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002afcd76e1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002afcd78f0000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00002afcd7b0b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002afcd69d8000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5 =&gt; not found
<br>
This is where the problem is.  Whenever I try to run the mpicc command
<br>
it tells me that it cannot find libimf.so.  Does that mean that there
<br>
is a problem in the compilation?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Here is where I am stumped.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amos
<br>
<p>On Fri, Mar 13, 2009 at 1:25 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Mar 13, 2009, at 2:42 PM, Amos Leffler wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Thanks for your advice.  I went back carefully through my PATH
</span><br>
<span class="quotelev2">&gt;&gt; file and corrected that so that I compiled openmpi-1.2.9 with the
</span><br>
<span class="quotelev2">&gt;&gt; Intel compilers seemingly without errors.  However, the simple test
</span><br>
<span class="quotelev2">&gt;&gt; examples wont run with the same error:
</span><br>
<span class="quotelev2">&gt;&gt; ~/Desktop/openmpi-1.2.9/examples&gt; mpicc hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; mpicc: error while loading shared libraries: libopen-pal.so.0: cannot
</span><br>
<span class="quotelev2">&gt;&gt; open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; I get similar results with the other examples.  Here is where I need help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's quite odd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does &quot;ldd mpicc&quot; show you?  (you may need to use the full path of
</span><br>
<span class="quotelev1">&gt; mpicc)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Amos Leffler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Mar 12, 2009 at 12:22 PM, Joshua Bernstein
</span><br>
<span class="quotelev2">&gt;&gt; &lt;jbernstein_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Amos,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        It looks like you do not have permission to make the directory
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /usr/local/etc. Either you need to run the make all install as root, so
</span><br>
<span class="quotelev3">&gt;&gt; &gt; you
</span><br>
<span class="quotelev3">&gt;&gt; &gt; have permission to that directory, or you need to use the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --prefix=&lt;path&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; option to configure so that the installation gets installed into a path
</span><br>
<span class="quotelev3">&gt;&gt; &gt; where you have permission.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Joshua Bernstein
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Senior Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Penguin Computing
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mar 12, 2009, at 12:13 PM, Amos Leffler wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hello Forum,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;          Attached is a file of my installation and trying examples
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; for openmpi-1.2.9 which were not successful. Hopefully the problem is
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; a simple one and obvious to a more experienced user.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;    I am trying to install and test openmpi-1.2.9. I found that I
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; could not use the Intel 11.0/.081 C++
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; and Fortran compilers although I think the problem is with these
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; compilers not openmpi.  The openmpi-
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 1.2.9 did compile successfully with the internal compilers of SuSE
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 10.2.  However, at the end of the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &quot;make all install&quot; command output I noted that some of the make
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; commands did not run  properly as
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; shown below.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;    I tried to run some of the simple examples and was not successful.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;  For hello_c.c I received the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; message &quot;mpicc not found&quot;.  Is there a simple workaround?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; `/home/amos/Desktop/openmpi-1.2.9/opal/libltdl'
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; `/home/amos/Desktop/openmpi-1.2.9/opal/libltdl'
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Making install in asm
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[2]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/asm'
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[3]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/asm'
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[3]: Nothing to be done for `install-exec-am'.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[3]: Nothing to be done for `install-data-am'.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[3]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/asm'
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[2]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/asm'
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Making install in etc
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[2]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/etc'
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[3]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/etc'
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; test -z &quot;/usr/local/etc&quot; || /bin/mkdir -p &quot;/usr/local/etc&quot;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; /bin/mkdir: cannot create directory `/usr/local/etc': Permission denied
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[3]: *** [install-sysconfDATA] Error 1
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[3]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/etc'
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[2]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/etc'
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make[1]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal'
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;    Any help would be appreciated.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;                                                       Amos
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Leffler&lt;install.output&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
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
<li><strong>Next message:</strong> <a href="8467.php">Ralph Castain: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Previous message:</strong> <a href="8465.php">Yury Tarasievich: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>In reply to:</strong> <a href="8429.php">Jeff Squyres: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8467.php">Ralph Castain: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Reply:</strong> <a href="8467.php">Ralph Castain: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Reply:</strong> <a href="8469.php">Doug Reeder: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
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
