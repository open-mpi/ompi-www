<?
$subject_val = "[OMPI users] Troubles with linking C++ standard library with openmpi 1.10";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  6 23:27:44 2016" -->
<!-- isoreceived="20160307042744" -->
<!-- sent="Sun, 6 Mar 2016 20:32:11 -0800" -->
<!-- isosent="20160307043211" -->
<!-- name="Jordan Willis" -->
<!-- email="jwillis0720_at_[hidden]" -->
<!-- subject="[OMPI users] Troubles with linking C++ standard library with openmpi 1.10" -->
<!-- id="FC0D1D63-6FB0-4077-A52F-D192EC820295_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8722E611-D615-4489-9519-A45F04BFCCCE_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Troubles with linking C++ standard library with openmpi 1.10<br>
<strong>From:</strong> Jordan Willis (<em>jwillis0720_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-06 23:32:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28649.php">Gilles Gouaillardet: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>Previous message:</strong> <a href="28647.php">Gilles Gouaillardet: "Re: [OMPI users] Sending string causes memory errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28649.php">Gilles Gouaillardet: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>Reply:</strong> <a href="28649.php">Gilles Gouaillardet: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I have tried everything to compile openmpi. It used to compile on my system, and I&#226;&#128;&#153;m not sure what has changed in my c++ libraries to get this error. I get the following when trying to compile contrib/vt/vt/extlib/otf/tools/otfprofile
<br>
<p>make[8]: Entering directory `/dnas/apps/openmpi/openmpi-1.10.2/ompi/contrib/vt/vt/extlib/otf/tools/otfprofile'
<br>
&nbsp;&nbsp;CXXLD    otfprofile
<br>
otfprofile-collect_data.o: In function `std::string::_M_check(unsigned long, char const*) const':
<br>
/usr/include/c++/4.9/bits/basic_string.h:324: undefined reference to `std::__throw_out_of_range_fmt(char const*, ...)'
<br>
otfprofile-create_latex.o: In function `std::string::_M_check(unsigned long, char const*) const':
<br>
/usr/include/c++/4.9/bits/basic_string.h:324: undefined reference to `std::__throw_out_of_range_fmt(char const*, ...)'
<br>
/usr/include/c++/4.9/bits/basic_string.h:324: undefined reference to `std::__throw_out_of_range_fmt(char const*, ...)'
<br>
otfprofile-create_filter.o: In function `std::string::_M_check(unsigned long, char const*) const':
<br>
/usr/include/c++/4.9/bits/basic_string.h:324: undefined reference to `std::__throw_out_of_range_fmt(char const*, ...)'
<br>
otfprofile-create_filter.o: In function `std::vector&lt;CTree&lt;std::string&gt;*, std::allocator&lt;CTree&lt;std::string&gt;*&gt; &gt;::_M_range_check(unsigned long) const':
<br>
/usr/include/c++/4.9/bits/stl_vector.h:803: undefined reference to `std::__throw_out_of_range_fmt(char const*, ...)'
<br>
otfprofile-create_filter.o:/usr/include/c++/4.9/bits/stl_vector.h:803: more undefined references to `std::__throw_out_of_range_fmt(char const*, ...)' follow
<br>
collect2: error: ld returned 1 exit status
<br>
make[8]: *** [otfprofile] Error 1
<br>
<p>If I look online, it may be due to trying to use gcc-4.8 functions in an 4.9 compiler. So I have tried switching to 4.8 just to check. They also say you may have to update your toolchain to force GCC-4.9 although I&#226;&#128;&#153;m not sure I know how to do this. I have also tried compiling openmpi1.8 (last stable) and get the same error. I have also reinstalled all my packages using aptitude.
<br>
<p>The reason I&#226;&#128;&#153;m trying to do a custom compile is because I&#226;&#128;&#153;m trying to build the pmi libraries that come with SLURM, although I get the same error on a basic configuration.
<br>
<p>I&#226;&#128;&#153;m on ubuntu server 14.04. I think I have exhausted my troubleshooting ideas and I&#226;&#128;&#153;m reaching out to you. My configuration log can be sent at request, but the attachment causes my message to get bounced from the list. 
<br>
<p>Thanks so much,
<br>
Jordan
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28648/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28649.php">Gilles Gouaillardet: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>Previous message:</strong> <a href="28647.php">Gilles Gouaillardet: "Re: [OMPI users] Sending string causes memory errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28649.php">Gilles Gouaillardet: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>Reply:</strong> <a href="28649.php">Gilles Gouaillardet: "Re: [OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
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
