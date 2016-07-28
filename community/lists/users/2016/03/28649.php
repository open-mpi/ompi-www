<?
$subject_val = "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  7 00:05:44 2016" -->
<!-- isoreceived="20160307050544" -->
<!-- sent="Mon, 7 Mar 2016 14:05:43 +0900" -->
<!-- isosent="20160307050543" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10" -->
<!-- id="56DD0C27.6030407_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="FC0D1D63-6FB0-4077-A52F-D192EC820295_at_gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-07 00:05:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28650.php">Jordan Willis: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>Previous message:</strong> <a href="28648.php">Jordan Willis: "[OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>In reply to:</strong> <a href="28648.php">Jordan Willis: "[OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28650.php">Jordan Willis: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>Reply:</strong> <a href="28650.php">Jordan Willis: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jordan,
<br>
<p>do you really need vt ?
<br>
if no, a trivial workaround is to
<br>
configure --disable-vt ...
<br>
<p>what is your configure command line ?
<br>
assuming g++ is your c++ compiler, what does g++ --version says ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On 3/7/2016 1:32 PM, Jordan Willis wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried everything to compile openmpi. It used to compile on my 
</span><br>
<span class="quotelev1">&gt; system, and I&#146;m not sure what has changed in my c++ libraries to get 
</span><br>
<span class="quotelev1">&gt; this error. I get the following when trying to 
</span><br>
<span class="quotelev1">&gt; compile contrib/vt/vt/extlib/otf/tools/otfprofile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[8]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/dnas/apps/openmpi/openmpi-1.10.2/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile'
</span><br>
<span class="quotelev1">&gt;   CXXLD  otfprofile
</span><br>
<span class="quotelev1">&gt; otfprofile-collect_data.o: In function `std::string::_M_check(unsigned 
</span><br>
<span class="quotelev1">&gt; long, char const*) const':
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.9/bits/basic_string.h:324: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `std::__throw_out_of_range_fmt(char const*, ...)'
</span><br>
<span class="quotelev1">&gt; otfprofile-create_latex.o: In function `std::string::_M_check(unsigned 
</span><br>
<span class="quotelev1">&gt; long, char const*) const':
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.9/bits/basic_string.h:324: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `std::__throw_out_of_range_fmt(char const*, ...)'
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.9/bits/basic_string.h:324: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `std::__throw_out_of_range_fmt(char const*, ...)'
</span><br>
<span class="quotelev1">&gt; otfprofile-create_filter.o: In function 
</span><br>
<span class="quotelev1">&gt; `std::string::_M_check(unsigned long, char const*) const':
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.9/bits/basic_string.h:324: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `std::__throw_out_of_range_fmt(char const*, ...)'
</span><br>
<span class="quotelev1">&gt; otfprofile-create_filter.o: In function 
</span><br>
<span class="quotelev1">&gt; `std::vector&lt;CTree&lt;std::string&gt;*, std::allocator&lt;CTree&lt;std::string&gt;*&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;::_M_range_check(unsigned long) const':
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.9/bits/stl_vector.h:803: undefined reference to 
</span><br>
<span class="quotelev1">&gt; `std::__throw_out_of_range_fmt(char const*, ...)'
</span><br>
<span class="quotelev1">&gt; otfprofile-create_filter.o:/usr/include/c++/4.9/bits/stl_vector.h:803: 
</span><br>
<span class="quotelev1">&gt; more undefined references to `std::__throw_out_of_range_fmt(char 
</span><br>
<span class="quotelev1">&gt; const*, ...)' follow
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[8]: *** [otfprofile] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I look online, it may be due to trying to use gcc-4.8 functions in 
</span><br>
<span class="quotelev1">&gt; an 4.9 compiler. So I have tried switching to 4.8 just to check. They 
</span><br>
<span class="quotelev1">&gt; also say you may have to update your toolchain to force GCC-4.9 
</span><br>
<span class="quotelev1">&gt; although I&#146;m not sure I know how to do this. I have also tried 
</span><br>
<span class="quotelev1">&gt; compiling openmpi1.8 (last stable) and get the same error. I have also 
</span><br>
<span class="quotelev1">&gt; reinstalled all my packages using aptitude.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason I&#146;m trying to do a custom compile is because I&#146;m trying to 
</span><br>
<span class="quotelev1">&gt; build the pmi libraries that come with SLURM, although I get the same 
</span><br>
<span class="quotelev1">&gt; error on a basic configuration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m on ubuntu server 14.04. I think I have exhausted my 
</span><br>
<span class="quotelev1">&gt; troubleshooting ideas and I&#146;m reaching out to you. My configuration 
</span><br>
<span class="quotelev1">&gt; log can be sent at request, but the attachment causes my message to 
</span><br>
<span class="quotelev1">&gt; get bounced from the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks so much,
</span><br>
<span class="quotelev1">&gt; Jordan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28648.php">http://www.open-mpi.org/community/lists/users/2016/03/28648.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28650.php">Jordan Willis: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>Previous message:</strong> <a href="28648.php">Jordan Willis: "[OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>In reply to:</strong> <a href="28648.php">Jordan Willis: "[OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28650.php">Jordan Willis: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>Reply:</strong> <a href="28650.php">Jordan Willis: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
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
