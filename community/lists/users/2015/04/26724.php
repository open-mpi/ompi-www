<?
$subject_val = "Re: [OMPI users] One-sided communication, a missing/non-existing API call";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 14:41:30 2015" -->
<!-- isoreceived="20150414184130" -->
<!-- sent="Tue, 14 Apr 2015 14:41:27 -0400" -->
<!-- isosent="20150414184127" -->
<!-- name="Andy Riebs" -->
<!-- email="andy.riebs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] One-sided communication, a missing/non-existing API call" -->
<!-- id="552D5F57.8000907_at_hp.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAbhqc6R=vRvonLcWEqNBxhPMAeLf43OQOXhY9qkFCp8U27NFw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] One-sided communication, a missing/non-existing API call<br>
<strong>From:</strong> Andy Riebs (<em>andy.riebs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-14 14:41:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26725.php">Nick Papior Andersen: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Previous message:</strong> <a href="26723.php">Nick Papior Andersen: "[OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>In reply to:</strong> <a href="26723.php">Nick Papior Andersen: "[OMPI users] One-sided communication, a missing/non-existing API call"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26725.php">Nick Papior Andersen: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Reply:</strong> <a href="26725.php">Nick Papior Andersen: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Reply:</strong> <a href="26726.php">Nathan Hjelm: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    Nick,<br>
    <br>
    You may have more luck looking into the OSHMEM layer of Open MPI;
    SHMEM is designed for one-sided communications.<br>
    <br>
    BR,<br>
    Andy<br>
    <br>
    <div class="moz-cite-prefix">On 04/14/2015 02:36 PM, Nick Papior
      Andersen wrote:<br>
    </div>
    <blockquote
cite="mid:CAAbhqc6R=vRvonLcWEqNBxhPMAeLf43OQOXhY9qkFCp8U27NFw@mail.gmail.com"
      type="cite">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <div dir="ltr">Dear all,
        <div><br>
        </div>
        <div>I am trying to implement some features using a one-sided
          communication scheme.</div>
        <div><br>
        </div>
        <div>The problem is that I understand the different one-sided
          communication schemes as this (basic words):</div>
        <div>MPI_Get) </div>
        <div>fetches remote window memory to a local memory space</div>
        <div>MPI_Get_Accumulate) </div>
        <div>1. fetches remote window memory to a local memory space</div>
        <div>2. sends a local memory space (different from that used in
          1.) to the remote window and does OP on those two quantities</div>
        <div>MPI_Put)</div>
        <div>sends local memory space to remote window memory</div>
        <div>MPI_Accumulate)</div>
        <div>sends a local memory space to the remote window and does OP
          on those two quantities<br>
        </div>
        <div>(surprisingly the documentation says that this only works
          with windows within the same node, note that
          MPI_Get_Accumulate does not say this constraint)</div>
        <div><br>
        </div>
        <div>?)</div>
        <div>Where is the function that fetches remotely and does
          operation in a local memory space?</div>
        <div><br>
        </div>
        <div>Do I really have to do MPI_Get to local memory, then do
          operation manually? (no it is not difficult, but... ;) )</div>
        <div>I would like this to exist:
          MPI_Get_Reduce(origin,...,target,...,MPI_OP,...) </div>
        <div><br>
        </div>
        <div>When I just looked at the API names I thought
          Get_Accumulate did this, but to my surprise that was not the
          case at all. :)<br>
        </div>
        <div><br>
        </div>
        <div>-- <br>
          <div class="gmail_signature">
            <div dir="ltr">
              <div>Kind regards Nick</div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <fieldset class="mimeAttachmentHeader"></fieldset>
      <br>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2015/04/26723.php">http://www.open-mpi.org/community/lists/users/2015/04/26723.php</a></pre>
    </blockquote>
    <br>
  </body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26725.php">Nick Papior Andersen: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Previous message:</strong> <a href="26723.php">Nick Papior Andersen: "[OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>In reply to:</strong> <a href="26723.php">Nick Papior Andersen: "[OMPI users] One-sided communication, a missing/non-existing API call"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26725.php">Nick Papior Andersen: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Reply:</strong> <a href="26725.php">Nick Papior Andersen: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Reply:</strong> <a href="26726.php">Nathan Hjelm: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
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
