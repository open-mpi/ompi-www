<?
$subject_val = "Re: [OMPI users] configure blcr errors openmpi 1.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 31 10:55:16 2011" -->
<!-- isoreceived="20111031145516" -->
<!-- sent="Mon, 31 Oct 2011 10:55:11 -0400" -->
<!-- isosent="20111031145511" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure blcr errors openmpi 1.4.4" -->
<!-- id="CAANzjEn5VK9KSdoRFCu9+XUqZFJA7d__dQLz0dG_yR1nHnU2jg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f4a32d7679c607ef3b2092730073f501.squirrel_at_webmail.cosy.sbg.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure blcr errors openmpi 1.4.4<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-31 10:55:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17655.php">Weston, Stephen: "[OMPI users] Error when calling MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="17653.php">vlad_at_[hidden]: "[OMPI users] configure  blcr errors openmpi 1.4.4"</a>
<li><strong>In reply to:</strong> <a href="17653.php">vlad_at_[hidden]: "[OMPI users] configure  blcr errors openmpi 1.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17844.php">Vlad Popa: "Re: [OMPI users] configure blcr errors openmpi 1.4.4"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17844.php">Vlad Popa: "Re: [OMPI users] configure blcr errors openmpi 1.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wonder if the try_compile step is failing. Can you send a compressed
<br>
copy of your config.log from this build?
<br>
<p>-- Josh
<br>
<p>On Mon, Oct 31, 2011 at 10:04 AM,  &lt;vlad_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to compile &#160;openmpi 1.4.4 with &#160;Torque, Infiniband and blcr
</span><br>
<span class="quotelev1">&gt; checkpoint support &#160;on &#160;Puias Linux 6.x &#160;(free derivate of RHEL 6x).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; all packages of blcr &#160;are installed &#160;(including header files blcr-devel)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; even torque ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; torque-libs, &#160;openib libraries are found ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, when &#160;executing the ./configure script it does not find &#160;the right
</span><br>
<span class="quotelev1">&gt; libraries and header files even though they are located &#160;under &#160;the
</span><br>
<span class="quotelev1">&gt; specified path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;./configure --with-tm=/usr/local/ --with-openib
</span><br>
<span class="quotelev1">&gt; --prefix=/usr/mpi/gcc/openmpi-1.4.4 &#160;--with-blcr-libdir=/usr/lib64/
</span><br>
<span class="quotelev1">&gt; --with-blcr=/usr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; last few lines of output of &#160; the ./configure run :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;..
</span><br>
<span class="quotelev1">&gt; checking for MCA component crs:blcr compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking --with-blcr value... sanity check ok (/usr)
</span><br>
<span class="quotelev1">&gt; checking --with-blcr-libdir value... sanity check ok (/usr/lib64/)
</span><br>
<span class="quotelev1">&gt; configure: WARNING: BLCR support requested but not found. &#160;Perhaps you
</span><br>
<span class="quotelev1">&gt; need to specify the location of the BLCR libraries.
</span><br>
<span class="quotelev1">&gt; configure: error: Aborting.
</span><br>
<span class="quotelev1">&gt; ..&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_gpu01 openmpi-1.4.4]# rpm -ql blcr-devel
</span><br>
<span class="quotelev1">&gt; /usr/include/blcr_common.h
</span><br>
<span class="quotelev1">&gt; /usr/include/blcr_errcodes.h[root_at_gpu01 openmpi-1.4.4]#[root_at_gpu01
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.4]# rpm &#160;-ql blcr-libs
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr.so.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr.so.0.5.2
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr_omit.so.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr_omit.so.0.5.2
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr_run.so.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr_run.so.0.5.2
</span><br>
<span class="quotelev1">&gt; /usr/share/doc/blcr-libs-0.8.2 rpm &#160;-ql blcr-libs
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr.so.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr.so.0.5.2
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr_omit.so.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr_omit.so.0.5.2
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr_run.so.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr_run.so.0.5.2
</span><br>
<span class="quotelev1">&gt; /usr/share/doc/blcr-libs-0.8.2
</span><br>
<span class="quotelev1">&gt; /usr/include/blcr_ioctl.h
</span><br>
<span class="quotelev1">&gt; /usr/include/blcr_proc.h
</span><br>
<span class="quotelev1">&gt; /usr/include/libcr.h
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr.so
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr_omit.so
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr_run.so
</span><br>
<span class="quotelev1">&gt; /usr/share/doc/blcr-devel-0.8.2
</span><br>
<span class="quotelev1">&gt; ...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;..
</span><br>
<span class="quotelev1">&gt; [root_at_gpu01 openmpi-1.4.4]# rpm &#160;-ql blcr-libs
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr.so.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr.so.0.5.2
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr_omit.so.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr_omit.so.0.5.2
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr_run.so.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libcr_run.so.0.5.2
</span><br>
<span class="quotelev1">&gt; /usr/share/doc/blcr-libs-0.8.2
</span><br>
<span class="quotelev1">&gt; ..&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, how can I &#160;set &#160;the right options &#160;for my &#160;requests &#160;in the
</span><br>
<span class="quotelev1">&gt; configure-script what exactly is it looking for (concerning blcr files ..)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks and greetings from Salzburg/Austria/Europe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vlad Popa
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17655.php">Weston, Stephen: "[OMPI users] Error when calling MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="17653.php">vlad_at_[hidden]: "[OMPI users] configure  blcr errors openmpi 1.4.4"</a>
<li><strong>In reply to:</strong> <a href="17653.php">vlad_at_[hidden]: "[OMPI users] configure  blcr errors openmpi 1.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17844.php">Vlad Popa: "Re: [OMPI users] configure blcr errors openmpi 1.4.4"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17844.php">Vlad Popa: "Re: [OMPI users] configure blcr errors openmpi 1.4.4"</a>
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
