<?
$subject_val = "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 16:52:52 2012" -->
<!-- isoreceived="20120112215252" -->
<!-- sent="Thu, 12 Jan 2012 14:52:45 -0700" -->
<!-- isosent="20120112215245" -->
<!-- name="Andrew Helwer" -->
<!-- email="Andrew.Helwer_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux" -->
<!-- id="AD3E5D661CED404A842D89A45C87D566332808D9CA_at_axe-post.Acceleware.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120112170230.GA9306_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux<br>
<strong>From:</strong> Andrew Helwer (<em>Andrew.Helwer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 16:52:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0506.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0504.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>In reply to:</strong> <a href="0502.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0503.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
COMPILING HWLOC ON WINDOWS WITH MINGW/CYGWIN
<br>
<p>I've attached the output of make V=1 in make_output.txt. I included the demonstration first of it failing because it can't find the include directory, but I just fix that by copy/pasting the contents of include/ into src/.
<br>
<p>HWLOC_HAVE_WINDOWS_H is defined to 1 in /include/hwloc/autogen/config.h.
<br>
<p>I copied the .def file from the official Windows build into .lib and ran the following from inside src/ (after running vcvars32 bat file to set up environment variables local to the terminal):
<br>
<p>C:\hwloc-1.3.1\src&gt;dolib.exe lib.exe X86 .libs/libhwloc.def libhwloc- .libs/libhwloc.lib
<br>
<p>This creates a .lib file, but when I use the VS compiler to compile and link against it, it asks for a dll at runtime. I have a couple other things I'll try, but I wanted to get this email off before too long.
<br>
<p>Also, prior to VS linking my program with hwloc, there are a few errors that crop up:
<br>
* VS does not know what __inline__ means
<br>
---- This is fixed by changing the definition of __hwloc_inline from __inline__ to __inline in include/hwloc/autogen/config.h
<br>
---- See: <a href="http://msdn.microsoft.com/en-us/library/z8y1yy88.aspx">http://msdn.microsoft.com/en-us/library/z8y1yy88.aspx</a>
<br>
* VS spouts out a whole bunch of errors relating to the definition of __attribute__ and __deprecated__
<br>
---- This is new in hwloc 1.3.1 - just using the header from 1.3.0 does away with all of these errors
<br>
---- The generated headers are the same as in the official releases for 1.3.1 and 1.3.0
<br>
---- The error output is attached in the file vs_output.txt
<br>
<p>COMPILING HWLOC ON WINDOWS WITH VS
<br>
<p>VS apparently has problems when functions are declared as static inline when using its C compiler. A way around this I've found is to explicitly pass it the /TP flag, which makes it use its C++ compiler. A bunch of errors about the identifier '__attribute__' being a syntax error then pop up, however, and I haven't found a way around those yet.
<br>
<p>Thanks for all your help so far!
<br>
<p>Andrew Helwer
<br>
Software Developer &#160;- Intern
<br>
Acceleware Ltd. (TSX-V:AXE)
<br>
www.acceleware.com
<br>
<p>Phone: +1.403.249.9099&#160; ext. 348
<br>
Fax: +1.403.249.9881
<br>
Email: andrew.helwer_at_[hidden]
<br>
<p><p>Get&#160;superpowered! 
<br>
Acceleware gets your products to market faster, better and stronger!&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 
<br>
<p><p>This e-mail may contain information that is privileged and confidential and subject to legal restrictions and penalties regarding its unauthorized disclosure or use. You are prohibited from copying, distributing or otherwise using this information if you are not the intended recipient. If you have received this e-mail in error, please notify us immediately by return e-mail and delete this e-mail and its attachments from your system. Thank you.
<br>
&#169; 2012 Acceleware Ltd., All Rights Reserved 
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: hwloc-users-bounces_at_[hidden] [mailto:hwloc-users-
</span><br>
<span class="quotelev1">&gt; bounces_at_[hidden]] On Behalf Of Samuel Thibault
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, January 12, 2012 10:03 AM
</span><br>
<span class="quotelev1">&gt; To: Hardware locality user list
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] Compiling hwloc into a static library on
</span><br>
<span class="quotelev1">&gt; Windows and Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew Helwer, le Thu 12 Jan 2012 02:11:58 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; If I run the command manually, it can't find the libhwloc.def file.
</span><br>
<span class="quotelev1">&gt; Which is reasonable, as it does not appear to exist in the .lib
</span><br>
<span class="quotelev1">&gt; directory. Am I missing something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In principle the .def file is generated by the linker. Could you run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make V=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to get the command lines, and check that HWLOC_HAVE_WINDOWS is 1 in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./include/hwloc/autogen/config.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ? At worse, I believe you can just copy the libhwloc.def contained in
</span><br>
<span class="quotelev1">&gt; the 32bit build of the exact same version of hwloc, it should be
</span><br>
<span class="quotelev1">&gt; compatible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0505/vs_output.txt">vs_output.txt</a>
</ul>
<!-- attachment="vs_output.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0505/make_output.txt">make_output.txt</a>
</ul>
<!-- attachment="make_output.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0506.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>Previous message:</strong> <a href="0504.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<li><strong>In reply to:</strong> <a href="0502.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0503.php">Samuel Thibault: "Re: [hwloc-users] Compiling hwloc into a static library on Windows and Linux"</a>
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
