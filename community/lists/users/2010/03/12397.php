<?
$subject_val = "Re: [OMPI users] problems with users@open-mpi.org";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 21:08:39 2010" -->
<!-- isoreceived="20100323010839" -->
<!-- sent="Mon, 22 Mar 2010 18:08:29 -0700" -->
<!-- isosent="20100323010829" -->
<!-- name="C.S. Johnson" -->
<!-- email="cjohnson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with users@open-mpi.org" -->
<!-- id="20100322180829.0430d53b3e916c69cc97ff130928da34.3bd12537ff.wbe_at_email02.secureserver.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] problems with users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with users@open-mpi.org<br>
<strong>From:</strong> C.S. Johnson (<em>cjohnson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 21:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12398.php">Kshipra Singh: "[OMPI users] Author Open MPI books-Packt Publishing."</a>
<li><strong>Previous message:</strong> <a href="12396.php">Bloom Broker: "[OMPI users] error when using mpiexec to launch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<body><span style="font-family:Verdana; color:#000000; font-size:10pt;"><div>Let me try that again, with the right address. If this makes the digest, then that was the problem.</div><div><br></div><div>Charlie ...<br></div>
<blockquote id="replyBlockquote" webmail="1" style="border-left: 2px solid blue; margin-left: 8px; padding-left: 8px; font-size: 10pt; color: black; font-family: verdana;">
<div id="wmQuoteWrapper">
-------- Original Message --------<br>
Subject: RE: problems with users@open-mpi.org<br>
From: "C.S. Johnson" &lt;cjohnson@valverdecomputing.com&gt;<br>
Date: Fri, March 19, 2010 6:08 am<br>
To: "Jeff Squyres" &lt;jsquyres@cisco.com&gt;<br>
Cc: "Shiqing Fan" &lt;fan@hlrs.de&gt;, users-owner@open-mpi.org<br>
<br>
<span style="font-family: Verdana; color: rgb(0, 0, 0); font-size: 10pt;"><div>I think I know what it is. I didn't have a text name associated with my email, which I just added. Without that, the digest function can't assign a name so it filters out the text, although it gets into the digest table of contents.</div><div><br></div><div>We'll find out if this makes the digest.</div><div><br></div><div>Charlie ...</div><div><br></div> <blockquote id="replyBlockquote" webmail="1" style="border-left: 2px solid blue; margin-left: 8px; padding-left: 8px; font-size: 10pt; color: black; font-family: verdana;"> <div id="wmQuoteWrapper"> -------- Original Message --------<br> Subject: Re: problems with users@open-mpi.org<br> From: Jeff Squyres &lt;jsquyres@cisco.com&gt;<br> Date: Thu, March 18, 2010 10:52 am<br> To: "&lt;cjohnson@valverdecomputing.com&gt;" &lt;cjohnson@valverdecomputing.com&gt;<br> Cc: "Shiqing Fan" &lt;fan@hlrs.de&gt;<br> <br> I just signed up for the digest so that I can hopefully see what you're talking about.<br> <br> Are the messages that you're talking about appearing on the web archives, or no?<br> <br> <a target="_blank" href="http://www.open-mpi.org/community/lists/users/">http://www.open-mpi.org/community/lists/users/</a><br> <br> I do see that mailman has a content filtering section; I have never played with these options before. Here's what we have set:<br> <br> "Remove message attachments that have a matching content type" is blank.<br> Remove message attachments that don't have a matching content type. Leave this field blank to skip this filter test." has 3 entries:<br> <br> multipart/mixed<br> multipart/alternative<br> text/plain<br> <br> Do you have MIME parts in your message that don't match one of those types, perchance?<br> <br> "Remove message attachments that have a matching filename extension" -- this shouldn't affect you.<br> <br> "Remove message attachments that don't have a matching filename extension. Leave this field blank to skip this filter test." is blank.<br> <br> "Should Mailman collapse multipart/alternative to its first part content?" is set to yes. I *believe* that this is because some mail messages sometimes have an effectively blank first MIME section.<br> <br> "Should Mailman convert text/html parts to plain text? This conversion happens after MIME attachments have been stripped." is set to yes.<br> <br> "Action to take when a message matches the content filtering rules." is set to "discard" (which means you wouldn't get a reject message back back if something happens). Let me change this to "reject" so that mailman should send you something back if it decides to reject it. Perhaps the reject message will contain a better clue as to what is happening...?<br> <br> <br> <br> On Mar 16, 2010, at 1:33 PM, &lt;cjohnson@valverdecomputing.com&gt; &lt;cjohnson@valverdecomputing.com&gt; wrote:<br> <br> &gt; The last digest (users Digest, Vol 1514, Issue 1) messages #4 and #6 are listed as mine in the TOC, but down below they say "[Message discarded by content filter]".<br> &gt; <br> &gt; Shiqing Fan's replies containing my messages are #5 and #8 in that same digest.<br> &gt; <br> &gt; Since the messages get that far, that is way past mailman, and of course, I get no errors from that. WHat is broken is purely a digest function, which as I said, is not content, because the replies by Shiqing Fan containing the same text get through.<br> &gt; -------- Original Message --------<br> &gt; Subject: Re: problems with users@open-mpi.org<br> &gt; From: Jeff Squyres &lt;jsquyres@cisco.com&gt;<br> &gt; Date: Tue, March 16, 2010 1:22 pm<br> &gt; To: &lt;cjohnson@valverdecomputing.com&gt;<br> &gt; Cc: Shiqing Fan &lt;fan@hlrs.de&gt;<br> &gt; <br> &gt; Gotcha (I don't get the digests, though). Are you getting specific reject messages from mailman? Or are they getting just dropped?<br> &gt; <br> &gt; Can you point to a specific message on the web archives from Shiqing that includes a message of yours that is not on the web archives?<br> &gt; <br> &gt; <br> &gt; <br> &gt; On Mar 16, 2010, at 10:11 AM, &lt;cjohnson@valverdecomputing.com&gt; wrote:<br> &gt; <br> &gt; &gt; If you look in the digest, each of my emails is discarded by the filter.<br> &gt; &gt; <br> &gt; &gt; Charlie ...<br> &gt; &gt; -------- Original Message --------<br> &gt; &gt; Subject: Re: problems with users@open-mpi.org<br> &gt; &gt; From: Jeff Squyres &lt;jsquyres@cisco.com&gt;<br> &gt; &gt; Date: Tue, March 16, 2010 9:56 am<br> &gt; &gt; To: &lt;cjohnson@valverdecomputing.com&gt;<br> &gt; &gt; Cc: &lt;users-owner@open-mpi.org&gt;<br> &gt; &gt; <br> &gt; &gt; On Mar 16, 2010, at 9:52 AM, &lt;cjohnson@valverdecomputing.com&gt; wrote:<br> &gt; &gt; <br> &gt; &gt; &gt; I am receiving digests OK from users@open-mpi.org, but for some reason all of my submissions, which were previously accepted are now being discarded by the content filter. When Shiqing Fan &lt;fan@hlrs.de&gt; later replies \ to my messages to myself and the users@open-mpi.org, the very same discarded email (mine) goes through the filter without a hitch.<br> &gt; &gt; <br> &gt; &gt; FWIW, I'm seeing your mails to the list...? For example, you just sent this one:<br> &gt; &gt; <br> &gt; &gt; <a target="_blank" href="http://www.open-mpi.org/community/lists/users/2010/03/12366.php">http://www.open-mpi.org/community/lists/users/2010/03/12366.php</a><br> &gt; &gt; <br> &gt; &gt; Are you getting a specific reject message from mailman?<br> &gt; &gt; <br> &gt; &gt; -- <br> &gt; &gt; Jeff Squyres<br> &gt; &gt; jsquyres@cisco.com<br> &gt; &gt; For corporate legal information go to:<br> &gt; &gt; <a target="_blank" href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a><br> &gt; &gt; <br> &gt; <br> &gt; <br> &gt; -- <br> &gt; Jeff Squyres<br> &gt; jsquyres@cisco.com<br> &gt; For corporate legal information go to:<br> &gt; <a target="_blank" href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a><br> &gt; <br> <br> <br> -- <br> Jeff Squyres<br> jsquyres@cisco.com<br> For corporate legal information go to:<br> <a target="_blank" href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a><br> <br> </div> </blockquote></span> 
</div>
</blockquote></span></body>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12398.php">Kshipra Singh: "[OMPI users] Author Open MPI books-Packt Publishing."</a>
<li><strong>Previous message:</strong> <a href="12396.php">Bloom Broker: "[OMPI users] error when using mpiexec to launch"</a>
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
