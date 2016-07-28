<?
$subject_val = "Re: [OMPI devel] Open MPI collectives algorithm selection";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 20:10:10 2015" -->
<!-- isoreceived="20150521001010" -->
<!-- sent="Thu, 21 May 2015 09:10:12 +0900" -->
<!-- isosent="20150521001012" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI collectives algorithm selection" -->
<!-- id="555D2264.2020904_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMJJpkW+0h79-D8t94MJKZCRpBKWyBb6QJnjwJrMJcDO4Zev8g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI collectives algorithm selection<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-20 20:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17439.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="17437.php">Rolf vandeVaart: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>In reply to:</strong> <a href="17433.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17439.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="17439.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>first i'd like to amend my initial message.
<br>
i previously wrote the same algo is used to parse rules per communicator 
<br>
size and per message size.
<br>
this is true, but i missed the part where it is mandatory to define a 
<br>
rule for zero size message.
<br>
consequently, a given message is either in an interval or its size is 
<br>
more or equal the size of the last rule for a given communicator.
<br>
<p>there is no such thing for communicator size.
<br>
for example, if the config file is
<br>
comm size 4 =&gt; rules A
<br>
comm size 8 =&gt; rules B
<br>
communicators of size 2, 4 and 6 will all use rule A.
<br>
this is very intuitive for comm size 4 and 6, but at first glance, comm 
<br>
size 2 is in a grey area.
<br>
<p>an other option would be to force the rule file to have a rule for 
<br>
communicators of size 0 (or 1 or two).
<br>
<p>bottom line, the rules must be sorted by comm size and message size by 
<br>
design, and that looks fair to me.
<br>
however, there is a grey area for small communicators and i think it 
<br>
should be cleared.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 5/21/2015 1:04 AM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Each rule define an interval with the previous rule, and everything in 
</span><br>
<span class="quotelev1">&gt; an interval will be bound the the rule with the next message size. You 
</span><br>
<span class="quotelev1">&gt; cannot define a rule for a specific amount. Thus, the fact that the 
</span><br>
<span class="quotelev1">&gt; rules must be ordered by message size was done by design.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Returning a NULL rule as suggested by Howard is even more confusing as 
</span><br>
<span class="quotelev1">&gt; with this approach you don't even know what is used (as it will 
</span><br>
<span class="quotelev1">&gt; automatically fall back to the default decision).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 19, 2015 at 11:57 PM, Howard Pritchard 
</span><br>
<span class="quotelev1">&gt; &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     HI Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     First a disclaimer - I do not know what the intended design was
</span><br>
<span class="quotelev1">&gt;     nor where the design document
</span><br>
<span class="quotelev1">&gt;     for this feature is located.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     However, I would certainly prefer that if the communicator size
</span><br>
<span class="quotelev1">&gt;     wasn't specifically specified
</span><br>
<span class="quotelev1">&gt;     in the rule file, a fall back do-no-harm algorithm would be selected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Following the KISS principal I would go with 2) returning a NULL
</span><br>
<span class="quotelev1">&gt;     rule when
</span><br>
<span class="quotelev1">&gt;     there is no matching size in the rule file for the communicator in
</span><br>
<span class="quotelev1">&gt;     question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2015-05-19 20:05 GMT-06:00 Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gilles_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         this is a follow-up of a discussion on the user ML started at
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/05/26882.php">http://www.open-mpi.org/community/lists/users/2015/05/26882.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         1) it turns out the dynamic rule filename must be &quot;sorted&quot; :
</span><br>
<span class="quotelev1">&gt;         - rules must be sorted by communicator size
</span><br>
<span class="quotelev1">&gt;         - within a given communicator size, rules must be sorted by
</span><br>
<span class="quotelev1">&gt;         message size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         if not, some rules are silently skipped, which is counter
</span><br>
<span class="quotelev1">&gt;         intuitive imho.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         2) the algo picks the rule with the higher communicator size
</span><br>
<span class="quotelev1">&gt;         less or equal than the current communicator size (same thing
</span><br>
<span class="quotelev1">&gt;         for message size).
</span><br>
<span class="quotelev1">&gt;         The exception is if there are no such rule, the first rule is
</span><br>
<span class="quotelev1">&gt;         selected.
</span><br>
<span class="quotelev1">&gt;         for example, if the config file has rules for comm size 4, 8
</span><br>
<span class="quotelev1">&gt;         and 16
</span><br>
<span class="quotelev1">&gt;         comm size 4 =&gt; pick rule for comm size 4
</span><br>
<span class="quotelev1">&gt;         comm size 5 =&gt; pick rule for comm 4
</span><br>
<span class="quotelev1">&gt;         comm size 8 =&gt; pick rule for comm 8
</span><br>
<span class="quotelev1">&gt;         *but*
</span><br>
<span class="quotelev1">&gt;         comm size 2 =&gt; pick rule for comm size 4 (!)
</span><br>
<span class="quotelev1">&gt;         imho, this is also counter intuitive.
</span><br>
<span class="quotelev1">&gt;         i would have expected no rule is picked and the default
</span><br>
<span class="quotelev1">&gt;         behaviour is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Same thing applies for message sizes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Is this the intended design ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         1) can be solved by inserting some qsort calls after parsing
</span><br>
<span class="quotelev1">&gt;         the config file.
</span><br>
<span class="quotelev1">&gt;         2) can be solved by returning a NULL rule instead of the first
</span><br>
<span class="quotelev1">&gt;         rule ( or by automatically inserting a rule for comm size 0
</span><br>
<span class="quotelev1">&gt;         (and message size 0) if no such rule is present in the config
</span><br>
<span class="quotelev1">&gt;         file).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         any thoughts ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Gilles
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17425.php">http://www.open-mpi.org/community/lists/devel/2015/05/17425.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17426.php">http://www.open-mpi.org/community/lists/devel/2015/05/17426.php</a>
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17433.php">http://www.open-mpi.org/community/lists/devel/2015/05/17433.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17438/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17439.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="17437.php">Rolf vandeVaart: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>In reply to:</strong> <a href="17433.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17439.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Reply:</strong> <a href="17439.php">George Bosilca: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
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
