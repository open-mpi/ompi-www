<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 11:35:21 2014" -->
<!-- isoreceived="20141003153521" -->
<!-- sent="Fri, 3 Oct 2014 15:34:56 +0000" -->
<!-- isosent="20141003153456" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="CAAbhqc74CyHb1nF4URFrepK3U477Or7W+jbCEdnDVSn0b2hASg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG8o1y6dN34c=pEJCPf5tG5K52cqB1q8FuJg0ZfiO7tgpWBnTw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 11:34:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25452.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25450.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25449.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25450.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2014-10-03 15:17 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; using ifort -r8, will reduce the error,
</span><br>
<span class="quotelev1">&gt; I am sure that every variable is in double precision, even when I convert
</span><br>
<span class="quotelev1">&gt; an integer to a real with real(X) or when I use FLOOR.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, that is the whole point of -r8. It is not the root cause of your
<br>
problems.
<br>
But rather than using that, _why are you using it_.
<br>
It seems to me that you do not fully understand the implications of adding
<br>
this flag to your code. If you agree on this point, then you should
<br>
definitely NOT use it :) (this is not to diminish your level of
<br>
understanding... sorry if it hurts your feelings, I do not know how to put
<br>
it any other way...)
<br>
<p>Consider this small C snippet:
<br>
<p>float f = 1.
<br>
double d =1.
<br>
<p>what you &quot;basically&quot; are doing is:
<br>
#define float double
<br>
float f = 1.
<br>
double d = 1.
<br>
<p>Now why on earth would you do that? Well it has its usages, but if you do
<br>
not see the implications it might have later, then the general consensus is
<br>
to _explicitly_ tell the variable which precision it has.
<br>
Do NOT consider -r8 a solution to your problems, it will (almost) certainly
<br>
create more than you solve.
<br>
<p><p><p><span class="quotelev1">&gt; So, where con I insert the flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I am converting the code with DP just to be able to debug my code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you thing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
I think that you should always use DP and never -r8.
<br>
<p><span class="quotelev1">&gt; Am I wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
&nbsp;No you are not wrong, I would just call it &quot;bad practice&quot;.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It seems to me as if you want the double precision of the real's, and then
<br>
you did:
<br>
<p>type :: ...
<br>
real :: RR(2), QQ(4)
<br>
end type
<br>
TYPES(1)=MPI_INTEGER !We have three variables type in the new varible
<br>
TYPES(2)=MPI_DOUBLE_PRECISION !Integer and Real and Real
<br>
TYPES(3)=MPI_DOUBLE_PRECISION !Integer and Real and Real
<br>
nBLOCKS(1)=1 !number of element in each block
<br>
nBLOCKS(2)=2
<br>
nBLOCKS(3)=4
<br>
<p>then you compiled and encountered problems. You added -r8 and it solved the
<br>
problems... Hmm... This is not the way to solve the problem.
<br>
<p>In fortran a real is a single precision quantity. If you want it in double
<br>
precision you have to tell the program that it is in double precision.
<br>
<p>In general coding I would advice you to use a module along the lines of
<br>
this:
<br>
<p>module prec
<br>
&nbsp;&nbsp;integer, parameter :: is = selected_int_kind(9)
<br>
&nbsp;&nbsp;integer, parameter :: il = selected_int_kind(18)
<br>
&nbsp;&nbsp;integer, parameter :: sp = selected_real_kind(p=6)
<br>
&nbsp;&nbsp;integer, parameter :: dp = selected_real_kind(p=15)
<br>
end module prec
<br>
<p>Every time you need a double precision variable do:
<br>
real(dp) :: double_precision
<br>
Every time you need a single precision variable you do:
<br>
real :: single_precision
<br>
or even better:
<br>
real(sp) :: single_precision
<br>
<p>If you want a &quot;single&quot; precision integer (int) you do:
<br>
integer :: int
<br>
or even better:
<br>
integer(is) :: int
<br>
If you want a &quot;double&quot; precision integer (long) you do:
<br>
integer(il) :: long
<br>
<p>Resorting to compiler flags to solve your problems should ALWAYS (in my
<br>
honest opinion :) ) be the definite absolute last thing. Not second to
<br>
last, really _the_ last thing. :)
<br>
I hope I made my point clear, if not I am at a loss... :)
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3 October 2014 17:03, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; selected_real_kind
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25449.php">http://www.open-mpi.org/community/lists/users/2014/10/25449.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25451/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25452.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25450.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25449.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25450.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
