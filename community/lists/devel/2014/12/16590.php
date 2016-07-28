<?
$subject_val = "Re: [OMPI devel] 1.8.4rc4 now out for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 05:57:29 2014" -->
<!-- isoreceived="20141215105729" -->
<!-- sent="Mon, 15 Dec 2014 02:56:57 -0800" -->
<!-- isosent="20141215105657" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc4 now out for testing" -->
<!-- id="CAAvDA14b6Mg1oPZAAXPvWpwLApyGbLqtKtYwaJSHYnn07gg_ZQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15f6HpsUtNtdjY_kw-=TROrnys4g2peB7dn0QjVbMyiqw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.4rc4 now out for testing<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 05:56:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16591.php">Eric Chamberland: "[OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
<li><strong>Previous message:</strong> <a href="16589.php">Pascal Deveze: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>In reply to:</strong> <a href="16588.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16597.php">Adrian Reber: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Dec 14, 2014 at 10:52 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Solaris-10/SPARC and &quot;--enable-static --disable-shared&quot; appears broken for
</span><br>
<span class="quotelev1">&gt; C++ apps (but OK for C).
</span><br>
<span class="quotelev1">&gt; I will report in more details when I have more information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>First the good news:
<br>
<p>The problem I was experiencing (with the Solaris Studio compilers) turned
<br>
out to be &quot;pilot error&quot;.
<br>
I had added &quot;-library=stlport4&quot; to CXXFLAGS but neglected to add the same
<br>
in --with-wrapper-cxxflags.
<br>
Adding to both has always sort of bothered me, and this time it bit me.
<br>
Oddly, the problem didn't appear until I forced static libs.
<br>
<p>Now the bad news:
<br>
<p>By trying more variants on my Solaris platforms I was able to get TWO new
<br>
failure modes.
<br>
However, I have a fix for one.
<br>
<p>1)
<br>
Still Solaris-10/SPARC and &quot;--enable-static --disable-shared&quot;  but this
<br>
time with gcc-3.4.6.
<br>
With this configuration I get Bus Errors from &quot;make check&quot; that do not
<br>
occur without these configure options:
<br>
<p>bash: line 5:  3141 Bus Error               (core dumped) ${dir}$tst
<br>
FAIL: position
<br>
bash: line 5:  3221 Bus Error               (core dumped) ${dir}$tst
<br>
FAIL: position_noncontig
<br>
<p><p>Examining the core from the second failure:
<br>
<p>t_at_1 (l_at_1) program terminated by signal BUS (invalid address alignment)
<br>
Current function is main
<br>
&nbsp;&nbsp;208       opal_pack_debug     = 0;
<br>
(dbx) print &amp;opal_pack_debug
<br>
&amp;opal_pack_debug = 0x10092e169
<br>
<p><p>The problem seems to be that the tests declare this (and others) as an int,
<br>
but the opal headers say bool:
<br>
<p>$ gegrep  -r '^extern .* opal_(pack|unpack|position)_debug' .
<br>
./test/datatype/position.c:extern int opal_unpack_debug;
<br>
./test/datatype/position.c:extern int opal_pack_debug;
<br>
./test/datatype/position.c:extern int opal_position_debug ;
<br>
./test/datatype/position_noncontig.c:extern int opal_unpack_debug;
<br>
./test/datatype/position_noncontig.c:extern int opal_pack_debug;
<br>
./test/datatype/position_noncontig.c:extern int opal_position_debug ;
<br>
./opal/datatype/opal_convertor_internal.h:extern bool opal_pack_debug;
<br>
./opal/datatype/opal_datatype_position.c:extern bool opal_position_debug;
<br>
<p>Defn of opal_unpack_debug is well hidden, but is also &quot;bool&quot;.
<br>
<p>Correcting &quot;int&quot; to &quot;bool&quot; for those 3 vars in the two tests resolved this
<br>
problem for me.
<br>
<p><p><p>2)
<br>
Now on my Solaris-11/x86-64 system with both GigE and IPoIB interfaces.
<br>
I am seeing the following when using the Solaris Studio compilers (Gnu
<br>
compilers were fine):
<br>
<p>$ mpirun -mca btl sm,self,openib -np 2 -host pcp-j-19,pcp-j-20
<br>
examples/ring_c'
<br>
[pcp-j-20:16239] mca_oob_tcp_accept: accept() failed: Error 0 (0).
<br>
------------------------------------------------------------
<br>
A process or daemon was unable to complete a TCP connection
<br>
to another process:
<br>
&nbsp;&nbsp;Local host:    pcp-j-20
<br>
&nbsp;&nbsp;Remote host:   172.18.0.120
<br>
This is usually caused by a firewall on the remote host. Please
<br>
check that any firewall (e.g., iptables) has been disabled and
<br>
try again.
<br>
------------------------------------------------------------
<br>
<p><p>Notice the &quot;Error 0 (0)&quot; which means errno=0 and suggests that we've not
<br>
properly linked the thread-safe C libraries (recall that there is one
<br>
thread per interface and these hosts have two).
<br>
I see &quot;-D_REENTRANT&quot; in the output of &quot;make&quot;.
<br>
However, the man pages suggest that one also needs &quot;-mt=yes&quot; in *both* the
<br>
compile and link steps (it defines _REENTRANT and links the proper libs).
<br>
<p>I hoped that I could resolve this failure by adding LDFLAGS=-mt=yes to the
<br>
configure command.
<br>
However, that didn't work.
<br>
<p><p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16590/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16591.php">Eric Chamberland: "[OMPI devel] 1.8.4rc3: WARNING: No loopback interface was found"</a>
<li><strong>Previous message:</strong> <a href="16589.php">Pascal Deveze: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>In reply to:</strong> <a href="16588.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16597.php">Adrian Reber: "Re: [OMPI devel] 1.8.4rc4 now out for testing"</a>
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
