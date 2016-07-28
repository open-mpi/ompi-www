<?
$subject_val = "Re: [OMPI devel] xensocket - callbacks through OPAL/libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 01:59:58 2008" -->
<!-- isoreceived="20080207065958" -->
<!-- sent="Wed, 6 Feb 2008 22:59:49 -0800 (PST)" -->
<!-- isosent="20080207065949" -->
<!-- name="Muhammad Atif" -->
<!-- email="m_atif_s_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] xensocket - callbacks through OPAL/libevent" -->
<!-- id="492161.57026.qm_at_web52109.mail.re2.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] xensocket - callbacks through OPAL/libevent" -->
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
<strong>Subject:</strong> Re: [OMPI devel] xensocket - callbacks through OPAL/libevent<br>
<strong>From:</strong> Muhammad Atif (<em>m_atif_s_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 01:59:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3152.php">Terry Dontje: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3150.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="3126.php">Muhammad Atif: "[OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.... Seems, adding the callback magic is better option. Will bug u guys in near future after some research on the issue. 
<br>
<p>&nbsp;
<br>
Best Regards,
<br>
Muhammad Atif
<br>
<p>----- Original Message ----
<br>
From: Brian W. Barrett &lt;brbarret_at_[hidden]&gt;
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Sent: Wednesday, February 6, 2008 2:57:31 AM
<br>
Subject: Re: [OMPI devel] xensocket - callbacks through OPAL/libevent
<br>
<p><p>On 
<br>
Mon, 
<br>
4 
<br>
Feb 
<br>
2008, 
<br>
Muhammad 
<br>
Atif 
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
I 
<br>
am 
<br>
trying 
<br>
to 
<br>
port 
<br>
xensockets 
<br>
to 
<br>
openmpi. 
<br>
In 
<br>
principle, 
<br>
I 
<br>
have 
<br>
the 
<br>
<span class="quotelev1">&gt; 
</span><br>
framework 
<br>
and 
<br>
everything, 
<br>
but 
<br>
there 
<br>
seems 
<br>
to 
<br>
be 
<br>
a 
<br>
small 
<br>
issue, 
<br>
I 
<br>
cannot 
<br>
<span class="quotelev1">&gt; 
</span><br>
get 
<br>
libevent 
<br>
(or 
<br>
OPAL) 
<br>
to 
<br>
give 
<br>
callbacks 
<br>
for 
<br>
receive 
<br>
(or 
<br>
send) 
<br>
for 
<br>
<span class="quotelev1">&gt; 
</span><br>
xensockets. 
<br>
I 
<br>
have 
<br>
tried 
<br>
to 
<br>
implement 
<br>
native 
<br>
code 
<br>
for 
<br>
xensockets 
<br>
with 
<br>
<span class="quotelev1">&gt; 
</span><br>
libevent 
<br>
library, 
<br>
again 
<br>
the 
<br>
same 
<br>
issue.  
<br>
No 
<br>
call 
<br>
backs! 
<br>
. 
<br>
With 
<br>
normal 
<br>
<span class="quotelev1">&gt; 
</span><br>
sockets, 
<br>
callbacks 
<br>
do 
<br>
come 
<br>
easily.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
So 
<br>
question 
<br>
is, 
<br>
do 
<br>
the 
<br>
socket/file 
<br>
descriptors 
<br>
have 
<br>
to 
<br>
have 
<br>
some 
<br>
special 
<br>
<span class="quotelev1">&gt; 
</span><br>
mechanism 
<br>
attached 
<br>
to 
<br>
them 
<br>
to 
<br>
support 
<br>
callbacks 
<br>
for 
<br>
libevent/opal? 
<br>
i.e 
<br>
<span class="quotelev1">&gt; 
</span><br>
some 
<br>
structure/magic?. 
<br>
i.e. 
<br>
maybe 
<br>
the 
<br>
developers 
<br>
of 
<br>
xensockets 
<br>
did 
<br>
not 
<br>
<span class="quotelev1">&gt; 
</span><br>
add 
<br>
that 
<br>
callback/interrupt 
<br>
thing 
<br>
at 
<br>
the 
<br>
time 
<br>
of 
<br>
creation. 
<br>
Xensockets 
<br>
is 
<br>
<span class="quotelev1">&gt; 
</span><br>
open 
<br>
source, 
<br>
but 
<br>
my 
<br>
knowledge 
<br>
about 
<br>
these 
<br>
issues 
<br>
is 
<br>
limited. 
<br>
So 
<br>
I 
<br>
though 
<br>
<span class="quotelev1">&gt; 
</span><br>
some 
<br>
pointer 
<br>
in 
<br>
right 
<br>
direction 
<br>
might 
<br>
be 
<br>
useful.
<br>
<p>Yes 
<br>
and 
<br>
no 
<br>
:).  
<br>
As 
<br>
you 
<br>
discovered, 
<br>
the 
<br>
OPAL 
<br>
interface 
<br>
just 
<br>
repackages 
<br>
a 
<br>
library 
<br>
called 
<br>
libevent 
<br>
to 
<br>
handle 
<br>
its 
<br>
socket 
<br>
multiplexing.  
<br>
Libevent 
<br>
can 
<br>
use 
<br>
a 
<br>
number 
<br>
of 
<br>
different 
<br>
mechanisms 
<br>
to 
<br>
look 
<br>
for 
<br>
activity 
<br>
on 
<br>
sockets, 
<br>
including 
<br>
select() 
<br>
and 
<br>
poll() 
<br>
calls.  
<br>
On 
<br>
Linux, 
<br>
it 
<br>
will 
<br>
generally 
<br>
use 
<br>
poll().  
<br>
poll() 
<br>
requires 
<br>
some 
<br>
kernel 
<br>
support 
<br>
to 
<br>
do 
<br>
its 
<br>
thing, 
<br>
so 
<br>
if 
<br>
Xensockets 
<br>
doesn't 
<br>
implement 
<br>
the 
<br>
right 
<br>
magic 
<br>
to 
<br>
trigger 
<br>
poll() 
<br>
events, 
<br>
then 
<br>
libevent 
<br>
won't 
<br>
work 
<br>
for 
<br>
Xensockets.  
<br>
There's 
<br>
really 
<br>
nothing 
<br>
you 
<br>
can 
<br>
do 
<br>
from 
<br>
the 
<br>
Open 
<br>
MPI 
<br>
front 
<br>
to 
<br>
work 
<br>
around 
<br>
this 
<br>
issue 
<br>
<pre>
-- 
it 
would 
have 
to 
be 
fixed 
as 
part 
of 
Xensockets.
&gt; 
Second 
question 
is, 
what 
if 
we 
cannot 
have 
the 
callbacks. 
What 
is 
the 
&gt; 
recommended 
way 
to 
implement 
the 
btl 
component 
for 
such 
a 
device? 
Do 
we 
&gt; 
need 
to 
do 
this 
with 
event 
timers?
Have 
a 
look 
at 
any 
of 
the 
BTLs 
that 
isn't 
TCP 
-- 
none 
of 
them 
use 
libevent 
callbacks 
for 
progress.  
Instead, 
they 
provide 
a 
progress 
function 
as 
part 
of 
the 
BTL 
interface, 
which 
is 
called 
on 
a 
regular 
basis 
whenever 
progress 
needs 
to 
be 
made.
Brian
_______________________________________________
devel 
mailing 
list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
      ____________________________________________________________________________________
Looking for last minute shopping deals?  
Find them fast with Yahoo! Search.  <a href="http://tools.search.yahoo.com/newsearch/category.php?category=shopping">http://tools.search.yahoo.com/newsearch/category.php?category=shopping</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3151/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3152.php">Terry Dontje: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3150.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Maybe in reply to:</strong> <a href="3126.php">Muhammad Atif: "[OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
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
