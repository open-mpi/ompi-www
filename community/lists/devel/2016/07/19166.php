<?
$subject_val = "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 15:40:01 2016" -->
<!-- isoreceived="20160707194001" -->
<!-- sent="Thu, 7 Jul 2016 14:39:58 -0500" -->
<!-- isosent="20160707193958" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc" -->
<!-- id="CAANzjE=xMVGn7AQ-NEbx=c3R8Mbv9_dg6M1HdCvbA=owXE0jvg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA171Mqqi2FPuBzibgbwg2Rk=zr3tWPcn5wbOj=qnxW_qTg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-07 15:39:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19167.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Class information in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="19165.php">Emani, Murali: "[OMPI devel] Class information in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="19164.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think a ticket or PR was filed for this. I was able to reproduce on
<br>
a Power8 machine, and filed the issue below:
<br>
&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/issues/1854">https://github.com/open-mpi/ompi/issues/1854</a>
<br>
<p>Nathan I added you to the ticket since it sounded like you had an idea
<br>
where the problem was.
<br>
<p>On Thu, Jul 7, 2016 at 12:48 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Big-endian Power7:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ xlc -qversion
</span><br>
<span class="quotelev1">&gt; IBM XL C/C++ for Linux, V13.1
</span><br>
<span class="quotelev1">&gt; Version: 13.01.0000.0000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ export OBJECT_MODE=64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ [...]/configure -prefix=[....] --enable-debug \
</span><br>
<span class="quotelev1">&gt;        CC=xlc  CFLAGS=&quot;-q64&quot;   --with-wrapper-cflags=&quot;-q64&quot;   \
</span><br>
<span class="quotelev1">&gt;        CXX=xlC CXXFLAGS=&quot;-q64&quot; --with-wrapper-cxxflags=&quot;-q64&quot; \
</span><br>
<span class="quotelev1">&gt;        FC=xlf  FCFLAGS=&quot;-q64&quot;  --with-wrapper-fcflags=&quot;-q64&quot;  \
</span><br>
<span class="quotelev1">&gt;       --disable-oshmem-fortran --with-hwloc=$HOME/hwloc-1.11.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note the --with-hwloc is there because this is the xlc version that was
</span><br>
<span class="quotelev1">&gt; crashing building the embedded hwloc.
</span><br>
<span class="quotelev1">&gt; Am retesting now without that flag, but don't expect it has any relation
</span><br>
<span class="quotelev1">&gt; to the SEGV in the patcher code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Little-endian Power8:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ xlc -qversion
</span><br>
<span class="quotelev1">&gt; IBM XL C/C++ for Linux, V13.1.2 (5725-C73, 5765-J08)
</span><br>
<span class="quotelev1">&gt; Version: 13.01.0002.0000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ [...]/configure -prefix=[....] --enable-debug \
</span><br>
<span class="quotelev1">&gt;        CC=xlc CXX=xlC FC=xlf --disable-mpi-fortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no xlf installation on this system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 7, 2016 at 8:39 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What was the configure string you used for this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have a Jenkins CI mechanism for XL, but it is using XLC 13.1.3 on that
</span><br>
<span class="quotelev2">&gt;&gt; system and we haven't been runing 'make check'. I have another system that
</span><br>
<span class="quotelev2">&gt;&gt; has XLC 13.1.2 that I can test on as well. I'm not sure if I'll be able to
</span><br>
<span class="quotelev2">&gt;&gt; fix without Nathan's help, but I can at least try to reproduce.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 6, 2016 at 4:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The issue reported in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://www.open-mpi.org/community/lists/devel/2016/06/19107.php">https://www.open-mpi.org/community/lists/devel/2016/06/19107.php</a> is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; still present on both my little-endian Power8 and big-endian Power7 systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know Nathan had been working on this, but I've lost track of the issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and/or pr number(s).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19156.php">http://www.open-mpi.org/community/lists/devel/2016/07/19156.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19163.php">http://www.open-mpi.org/community/lists/devel/2016/07/19163.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19164.php">http://www.open-mpi.org/community/lists/devel/2016/07/19164.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19166/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19167.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Class information in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="19165.php">Emani, Murali: "[OMPI devel] Class information in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="19164.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
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
