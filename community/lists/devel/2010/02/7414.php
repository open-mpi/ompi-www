<?
$subject_val = "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 11:53:22 2010" -->
<!-- isoreceived="20100211165322" -->
<!-- sent="Thu, 11 Feb 2010 13:53:15 -0300" -->
<!-- isosent="20100211165315" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL" -->
<!-- id="e7ba66e41002110853n536cc0bbtc03d96f8853fae00_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="859DBEA6-3E98-4478-ADAB-0F8AAC95FB10_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 11:53:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7415.php">Lisandro Dalcin: "[OMPI devel] MPI_Win_get_errhandler() and MPI_Win_set_errhandler() do not fail when passing MPI_WIN_NULL"</a>
<li><strong>Previous message:</strong> <a href="7413.php">Jeff Squyres: "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<li><strong>In reply to:</strong> <a href="7407.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7418.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7418.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11 February 2010 12:04, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Therefore, we can argue as much as you want about what the correct arguments of a reduce call should be, a reduce(count=0) is one of the meaningless MPI calls and as such should not be tolerated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Well, I have to disagree... I understand you (as an MPI implementor)
<br>
think that Reduce(count=0) could be meaningless and add complexity to
<br>
the implementation of MPI_Reduce()... But Reduce(count=0) could save
<br>
user code of special-casing the count==0 situation... after all,
<br>
zero-length arrays/sequences/containers do appear in actual codes...
<br>
<p><span class="quotelev1">&gt; Anyway, this discussion diverged from its original subject. The standard is pretty clear on what set of arguments are valid, and the fact that the send and receive buffers should be different is one of the strongest requirement (and this independent on what count is).
</span><br>
<p>Sorry.... If count=0, why sendbuf!=recvbuff is SO STRONGLY required? I
<br>
cannot figure out the answer...
<br>
<p><span class="quotelev1">&gt; As a courtesy, Open MPI accepts the heresy of a count = zero, but there is __absolutely__ no reason to stop checking the values of the other arguments when this is true. If the user really want to base the logic of his application on such a useless and non-standard statement (reduce(0)) at least he has to have the courtesy to provide a valid set of arguments.
</span><br>
<p>I'm still not convinced that recuce(0) is non-standard, as Jeff
<br>
pointer out, the standard says &quot;non-negative integer&quot;. The later
<br>
comment is IMHO is not saying that count=0 is invalid, such  a
<br>
conclusion is a misinterpretation. What's would be the rationale of
<br>
making Reduce(count=0) invalid, when all other
<br>
(communication+reductions) collective calls do not explicitly say that
<br>
count=0 is invalid, and &quot;count&quot; arguments are always described as
<br>
&quot;non-negative integer&quot; ??
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: If I can suggest a correct approach to fix the python bindings I would encourage you to go for the strongest and more meaningful approach, sendbuf should always be different that recvbuf (independent on the value of count).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I have the feeling that you think I'm bikeshedding because I'm lazy or
<br>
I have nothing more useful to do :-)... That's not the case... I'm the
<br>
developer of a MPI wrapper, it is not my business to impose arbitrary
<br>
restrictions on users... then I would like MPI implementations to
<br>
follow that rule... if count=0, I cannot see why I should restrict
<br>
user to pass sendbuf!=recvbuf ... moreover, in a dynamic language like
<br>
Python, things are not always obvious...
<br>
<p>Let me show you a little Python experiment... Enter you python prompt,
<br>
and type this:
<br>
<p>$ python
<br>
<span class="quotelev3">&gt;&gt;&gt; from array import array
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a = array('i', []) # one zero-length array of integers (C-int)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b = array('i', []) # other zero-length array
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a is b # are 'a' and 'b' the same object instance?
</span><br>
False
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<p>So far, so good.. we have two different arrays of integers, and their
<br>
length is zero...
<br>
Let's see the values of the (pointer, length), where the pointer is
<br>
represented as its integer value:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; a.buffer_info()
</span><br>
(0, 0)
<br>
<span class="quotelev3">&gt;&gt;&gt; b.buffer_info()
</span><br>
(0, 0)
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<p>Now, suppose I do this:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; from mpi4py import MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI.COMM_WORLD.Reduce(a, b, op=MPI.SUM, root=0)
</span><br>
Traceback (most recent call last):
<br>
&nbsp;&nbsp;File &quot;&lt;stdin&gt;&quot;, line 1, in &lt;module&gt;
<br>
&nbsp;&nbsp;File &quot;Comm.pyx&quot;, line 534, in mpi4py.MPI.Comm.Reduce (src/mpi4py.MPI.c:52115)
<br>
mpi4py.MPI.Exception: MPI_ERR_ARG: invalid argument of some other kind
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<p>Then a mpi4py user mail me asking: WTF? 'a' and 'b' were different
<br>
arrays, what's going on? why my call failed? And then I have to say:
<br>
this fails because of two implementation details... Built-in Python's
<br>
'array.array' instances have pointer=NULL when lenght=0, and your MPI
<br>
implementation requires sendbuf!=recvbuf, even if count=0 and
<br>
sendbuf=recvbuf=NULL... Again, you may still thing that
<br>
Reduce(count=0), or any other &lt;MPI_Collective&gt;(count=0) is a nonsense,
<br>
I may even agree with you... But IMHO that's not what the standard
<br>
says, but again, imposing restrictions user codes should not be our
<br>
business...
<br>
<p>Geoge, what could I do here? Should I forcibly pass a different,fake
<br>
value enforcing sendbuff!=recvbuff myself when count=0? Would this be
<br>
portable? What if other MPI implementation in some platform decides to
<br>
complain because the fake value I'm passing does not represent a valid
<br>
address?
<br>
<p><p>PS: Maintaining a MPI-2 binding for Python may requires a lot of care
<br>
and attention to little details. And I have to support, Python&gt;=2.3
<br>
and the new Python 3; on Windows, Linux and OS X, with many of the
<br>
MPI-1 and MPI-2 implementations out there... Consistent behavior and
<br>
standard compliance on MPI implementations is FUNDAMENTAL to develop
<br>
portable wrappers for other languages... Unfortunately, things are not
<br>
so easy; mpi4py's source code and testsuite is plenty of &quot;if OMPI&quot; and
<br>
&quot;if MPICH2&quot;...
<br>
<p><p><p><pre>
-- 
Lisandro Dalcin
---------------
Centro Internacional de M&#195;&#169;todos Computacionales en Ingenier&#195;&#173;a (CIMEC)
Instituto de Desarrollo Tecnol&#195;&#179;gico para la Industria Qu&#195;&#173;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#195;&#173;ficas y T&#195;&#169;cnicas (CONICET)
PTLC - G&#195;&#188;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7415.php">Lisandro Dalcin: "[OMPI devel] MPI_Win_get_errhandler() and MPI_Win_set_errhandler() do not fail when passing MPI_WIN_NULL"</a>
<li><strong>Previous message:</strong> <a href="7413.php">Jeff Squyres: "Re: [OMPI devel] Request_free() and Cancel() with REQUEST_NULL"</a>
<li><strong>In reply to:</strong> <a href="7407.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7418.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Reply:</strong> <a href="7418.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
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
