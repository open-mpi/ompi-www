<?
$subject_val = "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  9 06:01:49 2015" -->
<!-- isoreceived="20150209110149" -->
<!-- sent="Mon, 9 Feb 2015 12:01:48 +0100" -->
<!-- isosent="20150209110148" -->
<!-- name="simona bellavista" -->
<!-- email="afylot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking" -->
<!-- id="CAC-_n52u8+eYUZBBUueDpJntBHOrEm-7eGP4J8TkOhMHRxwQSg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5B1A0475-EF57-477A-9302-B883FC73008D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking<br>
<strong>From:</strong> simona bellavista (<em>afylot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-09 06:01:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26310.php">Saliya Ekanayake: "Re: [OMPI users] Max Registerable Memory Warning"</a>
<li><strong>Previous message:</strong> <a href="26308.php">Deva: "Re: [OMPI users] Max Registerable Memory Warning"</a>
<li><strong>In reply to:</strong> <a href="26306.php">Ralph Castain: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26311.php">Gilles Gouaillardet: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, thank you for the clarification. As I said I was wondering about the
<br>
general procedure. For example I have also another machine to which I would
<br>
like to compile, that is the following
<br>
<p>Linux other_machine 3.17.6-200.fc20.x86_64 #1 SMP Mon Dec 8 15:21:05 UTC
<br>
2014 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>* In first place: I am not sure I am considering the correct configuration
<br>
triplets, because I have been using x86_64-pc-linux-gnu, and I would be
<br>
grateful if somebody could give me feedback about that.
<br>
<p>*Because I am porting the code to a machine where I don't have compiler, I
<br>
would like to know if the configuration I am using is correct for
<br>
generating statically linked library (this is what I need, isn't it?). I
<br>
have compiled without specifying host and build and now I get:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ldd ../openmpi-1.8.4-cc/bin/mpif90
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00002aaaaaaab000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x000000322d800000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x000000322dc00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/librt.so.1 (0x000000322e800000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003234400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002aaaaaac7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x000000322e000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x000000322d400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x000000322d000000)
<br>
<p>I thought that I would get no shared linking with LDFLAGS=-static-intel but
<br>
now I see this refers only to intel library, is there a way to make all the
<br>
linking static?
<br>
<p>Moreover mpirun has some broken links:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ldd ./openmpi-1.8.4-cc/bin/mpirun
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fffc55b7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libbat.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;liblsf.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x00007f7c3ded9000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/libm.so.6 (0x00007f7c3dc56000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0x00007f7c3da51000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib/librt.so.1 (0x00007f7c3d849000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/libutil.so.1 (0x00007f7c3d646000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib/libgcc_s.so.1 (0x00007f7c3d42f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/libpthread.so.0 (0x00007f7c3d212000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/libc.so.6 (0x00007f7c3ce8e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007f7c3e10d000)
<br>
<p>*Moreover,when I try to compile with mpif90 on system B I get an error:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cannot open configuration file
<br>
/data/user/data/local/openmpi-1.8.4-cc/share/openmpi/mpif90-wrapper-data.txt
<br>
<p>(that is a file that refers to the full path on system A, but on system B
<br>
it has a different path, the fact is that I have no root-access on any of
<br>
the two systems)
<br>
<p>Thanks
<br>
<p>2015-02-08 18:57 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Well, the first thing is that there is no reason to cross compile in this
</span><br>
<span class="quotelev1">&gt; arrangement. Your target and host are the same, and the configuration won&#226;&#128;&#153;t
</span><br>
<span class="quotelev1">&gt; do anything with it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Normally you would set host and target. However, like I said, in this case
</span><br>
<span class="quotelev1">&gt; you are providing the same argument to both, and so nothing will happen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 8, 2015, at 3:45 AM, simona bellavista &lt;afylot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have two systems A (aka Host) and B (aka Target). On A a compiler
</span><br>
<span class="quotelev1">&gt; suite is installed (intel 14.0.2), on B there is no compiler. I want to
</span><br>
<span class="quotelev1">&gt; compile openmpi on A for running it on system B (in particular, I want to
</span><br>
<span class="quotelev1">&gt; use mpirun and mpif90), so I want to have static linking to the intel
</span><br>
<span class="quotelev1">&gt; libraries. First of all, I would like to know if it is possible to do this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The output of  uname -a on the two systems is:
</span><br>
<span class="quotelev2">&gt; &gt; 1) Host
</span><br>
<span class="quotelev2">&gt; &gt; Linux host 2.6.32-220.el6.x86_64 #1 SMP Tue Dec 6 19:48:22 GMT 2011
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) Target
</span><br>
<span class="quotelev2">&gt; &gt; Linux target 2.6.35-32-server #67-Ubuntu SMP Mon Mar 5 21:13:25 UTC 2012
</span><br>
<span class="quotelev1">&gt; x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using the following configuration:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export CC=icc
</span><br>
<span class="quotelev2">&gt; &gt; export FC=ifort
</span><br>
<span class="quotelev2">&gt; &gt; export CXX=icpc
</span><br>
<span class="quotelev2">&gt; &gt; export LDFLAGS=-static-intel
</span><br>
<span class="quotelev2">&gt; &gt; export LANG=C
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/home/user/local/openmpi-1.8.4-cc/
</span><br>
<span class="quotelev1">&gt; --host=x86_64-pc-linux-gnu --build=x86_64-pc-linux-gnu --enable-static
</span><br>
<span class="quotelev1">&gt; --disable-shared
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am not sure if the configuration triplets I am using are correct. I
</span><br>
<span class="quotelev1">&gt; know that in this case I am not technically cross-compiling, but I was
</span><br>
<span class="quotelev1">&gt; wondering if in the general case I have also to set --target and to what.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I get this error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Catastrophic error: could not set locale &quot;&quot; to allow processing of
</span><br>
<span class="quotelev1">&gt; multibyte characters
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I attach make.out and output.out (zipped)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.out.bz2&gt;&lt;make.out.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26305.php">http://www.open-mpi.org/community/lists/users/2015/02/26305.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26306.php">http://www.open-mpi.org/community/lists/users/2015/02/26306.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26309/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26310.php">Saliya Ekanayake: "Re: [OMPI users] Max Registerable Memory Warning"</a>
<li><strong>Previous message:</strong> <a href="26308.php">Deva: "Re: [OMPI users] Max Registerable Memory Warning"</a>
<li><strong>In reply to:</strong> <a href="26306.php">Ralph Castain: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26311.php">Gilles Gouaillardet: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
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
