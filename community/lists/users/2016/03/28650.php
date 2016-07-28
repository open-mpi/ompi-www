<?
$subject_val = "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  7 04:34:18 2016" -->
<!-- isoreceived="20160307093418" -->
<!-- sent="Mon, 7 Mar 2016 01:38:45 -0800" -->
<!-- isosent="20160307093845" -->
<!-- name="Jordan Willis" -->
<!-- email="jwillis0720_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10" -->
<!-- id="66314A54-ECC2-4B2F-8D20-61664CF6CCAC_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56DD0C27.6030407_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10<br>
<strong>From:</strong> Jordan Willis (<em>jwillis0720_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-07 04:38:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28651.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<li><strong>Previous message:</strong> <a href="28649.php">Gilles Gouaillardet: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>In reply to:</strong> <a href="28649.php">Gilles Gouaillardet: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Giles, 
<br>
<p>Looks like it works with excluding VT. I was using g++ &#151;version 4.9 btw. 
<br>
<p>Thank you,
<br>
Jordan
<br>
<span class="quotelev1">&gt; On Mar 6, 2016, at 9:05 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jordan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; do you really need vt ?
</span><br>
<span class="quotelev1">&gt; if no, a trivial workaround is to
</span><br>
<span class="quotelev1">&gt; configure --disable-vt ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what is your configure command line ?
</span><br>
<span class="quotelev1">&gt; assuming g++ is your c++ compiler, what does g++ --version says ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/7/2016 1:32 PM, Jordan Willis wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have tried everything to compile openmpi. It used to compile on my system, and I&#146;m not sure what has changed in my c++ libraries to get this error. I get the following when trying to compile contrib/vt/vt/extlib/otf/tools/otfprofile
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: Entering directory `/dnas/apps/openmpi/openmpi-1.10.2/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile'
</span><br>
<span class="quotelev2">&gt;&gt;   CXXLD    otfprofile
</span><br>
<span class="quotelev2">&gt;&gt; otfprofile-collect_data.o: In function `std::string::_M_check(unsigned long, char const*) const':
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/c++/4.9/bits/basic_string.h:324: undefined reference to `std::__throw_out_of_range_fmt(char const*, ...)'
</span><br>
<span class="quotelev2">&gt;&gt; otfprofile-create_latex.o: In function `std::string::_M_check(unsigned long, char const*) const':
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/c++/4.9/bits/basic_string.h:324: undefined reference to `std::__throw_out_of_range_fmt(char const*, ...)'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/c++/4.9/bits/basic_string.h:324: undefined reference to `std::__throw_out_of_range_fmt(char const*, ...)'
</span><br>
<span class="quotelev2">&gt;&gt; otfprofile-create_filter.o: In function `std::string::_M_check(unsigned long, char const*) const':
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/c++/4.9/bits/basic_string.h:324: undefined reference to `std::__throw_out_of_range_fmt(char const*, ...)'
</span><br>
<span class="quotelev2">&gt;&gt; otfprofile-create_filter.o: In function `std::vector&lt;CTree&lt;std::string&gt;*, std::allocator&lt;CTree&lt;std::string&gt;*&gt; &gt;::_M_range_check(unsigned long) const':
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/c++/4.9/bits/stl_vector.h:803: undefined reference to `std::__throw_out_of_range_fmt(char const*, ...)'
</span><br>
<span class="quotelev2">&gt;&gt; otfprofile-create_filter.o:/usr/include/c++/4.9/bits/stl_vector.h:803: more undefined references to `std::__throw_out_of_range_fmt(char const*, ...)' follow
</span><br>
<span class="quotelev2">&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[8]: *** [otfprofile] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I look online, it may be due to trying to use gcc-4.8 functions in an 4.9 compiler. So I have tried switching to 4.8 just to check. They also say you may have to update your toolchain to force GCC-4.9 although I&#146;m not sure I know how to do this. I have also tried compiling openmpi1.8 (last stable) and get the same error. I have also reinstalled all my packages using aptitude.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The reason I&#146;m trying to do a custom compile is because I&#146;m trying to build the pmi libraries that come with SLURM, although I get the same error on a basic configuration.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m on ubuntu server 14.04. I think I have exhausted my troubleshooting ideas and I&#146;m reaching out to you. My configuration log can be sent at request, but the attachment causes my message to get bounced from the list. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks so much,
</span><br>
<span class="quotelev2">&gt;&gt; Jordan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28648.php">http://www.open-mpi.org/community/lists/users/2016/03/28648.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28648.php">http://www.open-mpi.org/community/lists/users/2016/03/28648.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28649.php">http://www.open-mpi.org/community/lists/users/2016/03/28649.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28650/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28651.php">Marco Atzeri: "Re: [OMPI users] MPI_INIT gets stuck"</a>
<li><strong>Previous message:</strong> <a href="28649.php">Gilles Gouaillardet: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>In reply to:</strong> <a href="28649.php">Gilles Gouaillardet: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
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
