<?
$subject_val = "Re: [OMPI users] Searching the FAQ";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 17:38:46 2010" -->
<!-- isoreceived="20100125223846" -->
<!-- sent="Mon, 25 Jan 2010 17:38:36 -0500" -->
<!-- isosent="20100125223836" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Searching the FAQ" -->
<!-- id="4B5E1D6C.3010707_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9640ABDF-B210-4FBC-9284-84061C66468A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Searching the FAQ<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 17:38:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11881.php">Jaison Paul: "[OMPI users]  Can I start MPI_Spawn child processes early?"</a>
<li><strong>Previous message:</strong> <a href="11879.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>In reply to:</strong> <a href="11871.php">Jeff Squyres: "[OMPI users] Searching the FAQ"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11881.php">Jaison Paul: "[OMPI users]  Can I start MPI_Spawn child processes early?"</a>
<li><strong>Reply:</strong> <a href="11881.php">Jaison Paul: "[OMPI users]  Can I start MPI_Spawn child processes early?"</a>
<li><strong>Reply:</strong> <a href="11882.php">Jeff Squyres: "Re: [OMPI users] Searching the FAQ"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>Thanks for your &quot;RFC on FAQs&quot;!
<br>
<p>There go my two cents:
<br>
<p>A) Keep the FAQ, please!
<br>
<p>I am a big fan of the OpenMPI FAQ.
<br>
I use them all the time.
<br>
I also recommend them to everybody on this list and on other lists.
<br>
I've seen a lot of people do the same.
<br>
In the absence of more comprehensive documentation,
<br>
the FAQ is the resource we all count on to fix mistakes,
<br>
look for a forgotten syntax, setup our computers to work properly
<br>
with OpenMPI, learn a new concept, etc.
<br>
<p>So, whatever you do, please don't do away with the FAQs,
<br>
unless you already have more comprehensive documentation
<br>
ready to replace the FAQ.
<br>
<p>B) Add an &quot;ALL FAQ&quot; category, to make keyword search easier
<br>
on web browsers.
<br>
<p>Keyword search of the FAQ is a bit cumbersome when one
<br>
has 26 different FAQ categories / web pages to search for.
<br>
<p>A very simple / minimal effort way to allow web search
<br>
of the whole FAQ set would be to add the &quot;ALL FAQ&quot;
<br>
category to the current FAQ categories list (maybe on the very top
<br>
of the list).
<br>
The &quot;ALL FAQ&quot; page would concatenate all of your FAQ HTML files, 
<br>
allowing keyword search across all FAQs in any web browser.
<br>
<p>One doesn't need to be fancy and stylish to be effective.
<br>
<p>C) Please write the (long overdue) FAQ set about the
<br>
OpenMPI collectives!
<br>
<p>I asked before, and I beg for it again:
<br>
Please write a set of FAQs about
<br>
OpenMPI collectives, and how to tune them up.
<br>
<p>The current resource available to learn about collectives
<br>
are several sparse postings on the mailing list archive.
<br>
Despite the interesting questions posed and the generous answers 
<br>
provided about collectives on the mailing list,
<br>
they don't form a coherent elucidating body,
<br>
and are not easy to follow.
<br>
<p>Some questions about collectives that in one way
<br>
or another have been asked on the list:
<br>
<p>Which algorithms are available for each collective?
<br>
What is the rationale behind these algorithms?
<br>
What is the default algorithm used by each collective?
<br>
How do you enforce the use of a certain collective algorithm?
<br>
What are the pros and cons of hardwiring
<br>
a choice of collective algorithm?
<br>
How to tune up the collective algorithms to your application and to
<br>
your hardware?
<br>
And more ...
<br>
<p>Cheers,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I have some simple questions for all you users out there about the OMPI FAQ.  I ask because we see a LOT of you end up on the OMPI FAQ in our web statistics (most users who search either end up on the FAQ and/or on the web archives of the mailing list).  Hence, I'd like to know if we can improve the FAQ from a usability standpoint.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Is the FAQ useful in its current form?  More specifically:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I personally find it a little difficult to web search for something and then end up on a single FAQ page with a LOT of information on it (e.g., the text for all the questions/answers in that category).  I.e., if I'm searching for something specific, it would be useful to end up on a page with *just that one FAQ question/answer*.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - OTOH, if I don't know exactly what I'm looking for, it is useful to see a whole page of FAQ questions and answers so that I can scan through them all to find what I'm looking for (vs. clicking through a million different individual pages).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. We wrote all the PHP for the OMPI FAQ ourselves (it's not driven by a database; the content is all in individual text files).  Back when we started, we surveyed the web FAQ systems and found each of them lacking for one reason or another (I don't remember the details), and therefore wrote our own PHP stuff.  Do people have other FAQ web systems that they'd recommend these days?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Are there other features from an FAQ that you would like to see in the OMPI FAQ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ask these questions because a) the current system has annoyed me a few too many times recently for various limitations, and b) I'm wondering if there is something better out there -- better searching, more web-2.0-ish, ...whatever.  We're certainly not tied to the existing FAQ system -- the current set of questions and answers is fairly easy to extract from the PHP, so we could move it to another system if it would be desirable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11881.php">Jaison Paul: "[OMPI users]  Can I start MPI_Spawn child processes early?"</a>
<li><strong>Previous message:</strong> <a href="11879.php">Jed Brown: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>In reply to:</strong> <a href="11871.php">Jeff Squyres: "[OMPI users] Searching the FAQ"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11881.php">Jaison Paul: "[OMPI users]  Can I start MPI_Spawn child processes early?"</a>
<li><strong>Reply:</strong> <a href="11881.php">Jaison Paul: "[OMPI users]  Can I start MPI_Spawn child processes early?"</a>
<li><strong>Reply:</strong> <a href="11882.php">Jeff Squyres: "Re: [OMPI users] Searching the FAQ"</a>
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
