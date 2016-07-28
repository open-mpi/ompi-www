<?
$subject_val = "Re: [OMPI users] link problem on 64bit platform";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  2 04:57:40 2010" -->
<!-- isoreceived="20101102085740" -->
<!-- sent="Tue, 2 Nov 2010 09:57:36 +0100" -->
<!-- isosent="20101102085736" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] link problem on 64bit platform" -->
<!-- id="AANLkTinEwS+kpGbGq4cEXBkS6Ph9ULjD7kkBqFMfJjAN_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CCEB7FA.90300_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] link problem on 64bit platform<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-02 04:57:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14676.php">jody: "Re: [OMPI users] message truncated error"</a>
<li><strong>Previous message:</strong> <a href="14674.php">David Zhang: "Re: [OMPI users] message truncated error"</a>
<li><strong>In reply to:</strong> <a href="14670.php">Tim Prince: "Re: [OMPI users] link problem on 64bit platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14679.php">Jeff Squyres: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Reply:</strong> <a href="14679.php">Jeff Squyres: "Re: [OMPI users] link problem on 64bit platform"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI
<br>
@trent
<br>
&nbsp;&nbsp;no, i didn't use the other calls, because i think they are all the
<br>
same (on my installation they are all soft links to opal_wrapper)
<br>
<p>@tim
<br>
&nbsp;&nbsp;gentoo on 64 bit does have lib and lib64 directories for the
<br>
respective architectures (at / and at /usr)
<br>
&nbsp;&nbsp;but in my 64-bit installation of openMPI there  is no lib64
<br>
directory, only a lib.
<br>
&nbsp;&nbsp;I thought the naming of the internal directory structure of openMPI
<br>
would be determined by the installation
<br>
&nbsp;&nbsp;(i.e. the `make install`) and not by the operating system.
<br>
<p>@jeff
<br>
&nbsp;&nbsp;i don't remember the particular CFLAGS or CXXFLAGS i had used, but i
<br>
have now rebuilt openMPI with
<br>
&nbsp;&nbsp;&nbsp;./configure CFLAGS=-m64 CXXFLAGS=-m64
<br>
--prefix=/opt/openmpi-1.4.2-64 --with-threads --disable-mpi-f77
<br>
--disable-mpi-f90
<br>
&nbsp;&nbsp;and now the problem has been solved.
<br>
<p>After something similar has then happened when trying to do 32bit
<br>
compilations, i think i found out what the original problem was:
<br>
I had first done a 64 bit installation of OpenMPI installed under
<br>
/opt/openmpi-1.4.2.
<br>
I later renamed this directory to /opt/openmpi-1.4.2-64, and installed
<br>
a 32bit version of OpenMPI in /opt/openmpi-1.4.2
<br>
<p>Apparently, when i the tried to do a 64bit compilation, the linker
<br>
looked into the lib-directory with the *original* name
<br>
/opt/openmpi-1.4.2
<br>
instead of /opt/openmpi-1.4.2-64, so of course it only found the 32bit
<br>
libs of the newer installation.
<br>
<p>To test this assumption i now renamed the 64-bit installation set my
<br>
/opt/openmpi link to the new directory and tried to compile:
<br>
jody_at_aim-squid_0 ~/progs $ mpiCC -g -o HelloMPI HelloMPI.cpp
<br>
Cannot open configuration file
<br>
/opt/openmpi-1.4.2-64/share/openmpi/mpiCC-wrapper-data.txt
<br>
Error parsing data file mpiCC: Not found
<br>
<p>So again, it looked into the original installation directory of the
<br>
64-bit installation for some files
<br>
<p>So i guess the basic question is:
<br>
&nbsp;&nbsp;is it permitted to rename openMPI installations, and if yes how is
<br>
this porperly done (since a simple mv doesn't work)
<br>
<p>Sorry about the imprecise question. Indeed, if i had looked exactly at
<br>
the original output, i should have noticed that
<br>
the linker was looking in the wrong directory.
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<p><p><p>Thanks anyway
<br>
&nbsp;&nbsp;Jody
<br>
<p><p>On Mon, Nov 1, 2010 at 1:52 PM, Tim Prince &lt;n8tm_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On 11/1/2010 5:24 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 1, 2010, at 5:20 AM, jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jody_at_aim-squid_0 ~/progs $ mpiCC -g -o HelloMPI HelloMPI.cpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/gcc/x86_64-pc-linux-gnu/4.4.4/../../../../x86_64-pc-linux-gnu/bin/ld:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; skipping incompatible /opt/openmpi-1.4.2/lib/libmpi_cxx.so when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; searching for -lmpi_cxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the key message -- it found libmpi_cxx.so, but the linker deemed
</span><br>
<span class="quotelev2">&gt;&gt; it incompatible, so it skipped it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Typically, it means that the cited library is a 32-bit one, to which the
</span><br>
<span class="quotelev1">&gt; 64-bit ld will react in this way. &#160;You could have verified this by
</span><br>
<span class="quotelev1">&gt; file /opt/openmpi-1.4.2/lib/*
</span><br>
<span class="quotelev1">&gt; By normal linux conventions a directory named /lib/ as opposed to /lib64/
</span><br>
<span class="quotelev1">&gt; would contain only 32-bit libraries. &#160;If gentoo doesn't conform with those
</span><br>
<span class="quotelev1">&gt; conventions, maybe you should do your learning on a distro which does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Prince
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
<li><strong>Next message:</strong> <a href="14676.php">jody: "Re: [OMPI users] message truncated error"</a>
<li><strong>Previous message:</strong> <a href="14674.php">David Zhang: "Re: [OMPI users] message truncated error"</a>
<li><strong>In reply to:</strong> <a href="14670.php">Tim Prince: "Re: [OMPI users] link problem on 64bit platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14679.php">Jeff Squyres: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Reply:</strong> <a href="14679.php">Jeff Squyres: "Re: [OMPI users] link problem on 64bit platform"</a>
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
