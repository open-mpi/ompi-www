<?
$subject_val = "[OMPI devel] testing assignments/requests";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 17:04:53 2014" -->
<!-- isoreceived="20140124220453" -->
<!-- sent="Fri, 24 Jan 2014 14:04:50 -0800" -->
<!-- isosent="20140124220450" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] testing assignments/requests" -->
<!-- id="CAAvDA17-ZwLqNJ9kbwV+0P7KEWF2L+=Qvh0=8qXnmYSr4+Jnew_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] testing assignments/requests<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 17:04:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13912.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] out-of-date or missing manpages"</a>
<li><strong>Previous message:</strong> <a href="13910.php">Ralph Castain: "Re: [OMPI devel] harmless warnings from ompi_rb_tree test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI devel] testing assignments/requests"</a>
<li><strong>Reply:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI devel] testing assignments/requests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like, with the possible exception of iterating with Jeff on
<br>
Fortran configure tests, my (annual?) round of
<br>
torture-the-open-mpi-dev^H^H^Hsources is nearing its end.
<br>
<p>Some of have probably noticed that I started mining the ticket system for
<br>
things to test.  I've searched for my name, for certain platforms I have
<br>
access to, and have skimmed all the open CMRs and many defects for v1.7.
<br>
&nbsp;I've added myself to the CC field on some where I may have the (unique?)
<br>
ability to verify that the fix was effective.
<br>
<p>I did not search closed tickets.  If there are any (non-documentation)
<br>
issues for 1.7.4 that have been closed, then my testing last night PROBABLY
<br>
covered them.  However, if there are specific configure options (like
<br>
--enable-builtin-atomics for #3081) then I probably did NOT test it last
<br>
night.  So, if there are any items in v1.7 that you would specifically like
<br>
me to (re)test, please let me know (CCing user &quot;phargrov&quot; in trac is
<br>
preferred if a ticket already exists).
<br>
<p>For the future, when there are tickets for defects where I was the original
<br>
(devel list?) reporter OR you think I may be the best/only candidate to
<br>
verify a fix, please feel free to add me to the CC field.  At worse I'll
<br>
ignore the emails, but at best I can (re)test to confirm that a fix (either
<br>
proposed or committed) actually works.  By adding me to the CC field, a
<br>
portion of this process can continue year-round instead of being all
<br>
crammed into the RC period.  This applies ESPECIALLY to CMRs to 1.7.5, to
<br>
avoid unnecessary delays of v1.8.
<br>
<p>An aside:
<br>
At least twice in this round of testing it was discovered that issues I had
<br>
reported in 1.5/1.6 got fixed in the branch WITHOUT being fixed in the
<br>
trunk.  If there is some flaw in the process that could be addressed by
<br>
changing how *I* operate, please let me know.  I am hesitant to switch from
<br>
mailing-list reports to entering my own tickets, but could if that it
<br>
preferred.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13911/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13912.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] out-of-date or missing manpages"</a>
<li><strong>Previous message:</strong> <a href="13910.php">Ralph Castain: "Re: [OMPI devel] harmless warnings from ompi_rb_tree test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI devel] testing assignments/requests"</a>
<li><strong>Reply:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI devel] testing assignments/requests"</a>
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
