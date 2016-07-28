<?
$subject_val = "Re: [OMPI users] cartofile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 21 11:09:31 2009" -->
<!-- isoreceived="20090921150931" -->
<!-- sent="Mon, 21 Sep 2009 08:10:24 -0700" -->
<!-- isosent="20090921151024" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cartofile" -->
<!-- id="4AB79760.4_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990909210146x15183d34sb278fb943f1ff50f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] cartofile<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-21 11:10:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10711.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Previous message:</strong> <a href="10709.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>In reply to:</strong> <a href="10708.php">Lenny Verkhovsky: "Re: [OMPI users] cartofile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Thank you, but I don't understand who is consuming this information for
what.&nbsp; E.g., the mpirun man page describes the carto file, but doesn't
give users any indication whether they should be worrying about this.<br>
<br>
Lenny Verkhovsky wrote:
<blockquote
 cite="mid453d39990909210146x15183d34sb278fb943f1ff50f@mail.gmail.com"
 type="cite">
  <div dir="ltr">
  <div>Hi Eugene,<br>
  </div>
  <div>carto file is a file with a staic graph topology of your node.</div>
  <div>in the opal/mca/carto/file/carto_file.h you can see example.</div>
  <div>( yes I know that , it should be help/man list :) )</div>
  <div>Basically it describes a map of your node and inside
interconnection.</div>
  <div>Hopefully it will be discovered automatically someday, </div>
  <div>but for now you can describe your node manually.</div>
  <div></div>
  <div>Best regards&nbsp;</div>
  <div>Lenny.</div>
  <br>
  <div class="gmail_quote">On Thu, Sep 17, 2009 at 12:38 AM, Eugene Loh
  <span dir="ltr">&lt;<a href="mailto:Eugene.Loh@sun.com">Eugene.Loh@sun.com</a>&gt;</span>
wrote:<br>
  <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">I
feel like I should know, but what's a cartofile? &nbsp;I guess you supply
"topological" information about a host, but I can't tell how this
information is used by, say, mpirun.<br>
  </blockquote>
  </div>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10711.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Previous message:</strong> <a href="10709.php">Jonathan Dursi: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>In reply to:</strong> <a href="10708.php">Lenny Verkhovsky: "Re: [OMPI users] cartofile"</a>
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
