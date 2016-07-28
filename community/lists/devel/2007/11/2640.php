<?
$subject_val = "Re: [OMPI devel] Multiworld MCA parameter values broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 10:20:14 2007" -->
<!-- isoreceived="20071119152014" -->
<!-- sent="Mon, 19 Nov 2007 10:19:58 -0500" -->
<!-- isosent="20071119151958" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multiworld MCA parameter values broken" -->
<!-- id="AF5B5116-D718-45BC-A8DC-EA665D38ED47_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C366F695.B59C%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Multiworld MCA parameter values broken<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-19 10:19:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2641.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2639.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>In reply to:</strong> <a href="2639.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2641.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Reply:</strong> <a href="2641.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 19, 2007, at 10:15 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...okay, I get the message: if it is going to be fixed, then I  
</span><br>
<span class="quotelev1">&gt; have to
</span><br>
<span class="quotelev1">&gt; fix it on my end. ;-) Which means it ain't happening anytime soon,  
</span><br>
<span class="quotelev1">&gt; so Tim P
</span><br>
<span class="quotelev1">&gt; is the one left in the lurch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry Tim! Perhaps you can come up with a compromise that re-enables  
</span><br>
<span class="quotelev1">&gt; what
</span><br>
<span class="quotelev1">&gt; you want to do.
</span><br>
<p>Yep -- sorry Tim.  :-(
<br>
<p>Is this only a problem for the rsh/ssh launcher?  I *think* that  
<br>
should be the only launcher affected -- all others use raw argv string  
<br>
arrays, right?  If so, we already have a local/non-local flag in the  
<br>
rsh launcher, right?  I agree it kinda sucks, but it may be necessary  
<br>
to construct argv differently between local/non-local (which we  
<br>
already do, right?).
<br>
<p><p><p><span class="quotelev1">&gt; On 11/19/07 8:11 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 19, 2007, at 10:01 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, it -is- a significant problem when passing the params
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the orteds, as Tim has eloquently pointed out in his original
</span><br>
<span class="quotelev3">&gt;&gt;&gt; posting. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guess I don't see why it would be a significant problem to just have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_cmd_line_parse do the &quot;right thing&quot; - if a string param is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quoted, then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just remove the quotes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How would opal_cmd_line_parse know when to remove quotes and when not
</span><br>
<span class="quotelev2">&gt;&gt; remove quotes?  I.e., what if an MCA param (or some other value, such
</span><br>
<span class="quotelev2">&gt;&gt; as a user application argv) required quotes?  This is not uncommon  
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt; the wrapper compilers, for example (passing -D's to the C  
</span><br>
<span class="quotelev2">&gt;&gt; preprocessor
</span><br>
<span class="quotelev2">&gt;&gt; that take string arguments).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; AFAIK, opal_cmd_line_parse() does exactly what I intended it to.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; It performs no shell-like quoting because it expects to be given a
</span><br>
<span class="quotelev2">&gt;&gt; list of &quot;final&quot; string tokens.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Problem solved, and I wouldn't have to add a bunch of code to figure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when to assemble argv arrays in different ways.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Er... I don't understand: I joined this thread because I thought  
</span><br>
<span class="quotelev2">&gt;&gt; there
</span><br>
<span class="quotelev2">&gt;&gt; was still something to fix...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would be against changing opal_cmd_line_parse() in the manner that
</span><br>
<span class="quotelev2">&gt;&gt; you have described because it will break other things (e.g., the
</span><br>
<span class="quotelev2">&gt;&gt; wrapper compilers).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/19/07 7:52 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I guess I don't see why this is an opal_cmd_line_parse() problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you invoke executables through system(), then a shell is used  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; quoting is necessary to preserve the individual string tokens  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (i.e.,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;my beloved string&quot; would be passed to the application as one argv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; token, without the quotes).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But if you're building up an array of argv and calling some form of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exec(), then no shell is involved and quoting should not be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; necessary.  Specifically:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    opal_append_argv(&amp;argc, &amp;argv, &quot;my beloved string&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will be passed as one string token to the application.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_cmd_line_parse() is passed an array of argv, meaning that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command line have already been split into individual string
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tokens.  I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; guess the question is whether these come in directly from the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; arguments to main() or whether we are getting a single string and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; breaking it up into tokens.  If the latter is true, then we need to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; re-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; evaluate our break-into-tokens algorithm.  I have a dim  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recollection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that these come in from the arguments to main(), though.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I guess I can see where this would get complicated for rsh/ssh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; invocations, because *both* models are used. (i.e., you exec  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; locally
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but it turns into a system-like invocation on the remote side).  In
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this case, I think you'll need to quote extended strings (e.g.,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; those
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; containing spaces) for the non-local invocations not not quote it  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; local invocations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 19, 2007, at 9:19 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My, you are joining late! ;-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The problem is with MCA params that take string arguments. If we
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pass the following:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mca foo &quot;my beloved string&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on the command line of an orted, we get a value for foo that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; includes the quote marks. I verified this rather painfully when
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; attempting to pass a command line mca param for a uri. I  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; eventually
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; had to add specific code to clean the paramater up.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This appears to be somehow related to the precise method used to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; register the param. For example, the following deprecated method
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; works fine:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On the setup end:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   opal_argv_append(argc, argv, &quot;--gprreplica&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   if (NULL != orte_process_info.gpr_replica_uri) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       contact_info = strdup(orte_process_info.gpr_replica_uri);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   } else {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       contact_info = orte_rml.get_contact_info();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   asprintf(&amp;param, &quot;\&quot;%s\&quot;&quot;, contact_info);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   opal_argv_append(argc, argv, param);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And on the receiving end:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   id = mca_base_param_register_string(&quot;gpr&quot;, &quot;replica&quot;, &quot;uri&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; NULL, orte_process_info.gpr_replica_uri);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   mca_base_param_lookup_string(id,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &amp;(orte_process_info.gpr_replica_uri));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   mca_base_param_set_internal(id, true);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, the following does NOT work cleanly:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On the setup end:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  rml_uri = orte_rml.get_contact_info();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   asprintf(&amp;param, &quot;\&quot;%s\&quot;&quot;, rml_uri);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   opal_argv_append(argc, argv, &quot;--hnp-uri&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   opal_argv_append(argc, argv, param);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On the receiving end:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   mca_base_param_reg_string_name(&quot;orte&quot;, &quot;hnp_uri&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                  &quot;HNP contact info&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                  true, false, NULL,  &amp;uri);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thereby necessitating the addition of the following code to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clean it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; up:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   if (NULL != uri) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       /* the uri value passed to us will have quote marks around
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it to protect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       * the value if passed on the command line. We must remove
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; those
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       * to have a correct uri string
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      if ('&quot;' == uri[0]) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           /* if the first char is a quote, then so will the last
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; one be */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          ptr = &amp;uri[1];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           len = strlen(ptr) - 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       } else {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           ptr = &amp;uri[0];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           len = strlen(uri);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       /* we have to copy the string by hand as strndup is a GNU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extension
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        * and may not be generally available
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      orte_process_info.my_hnp_uri = (char*)malloc(len+1);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       for (i=0; i &lt; len; i++) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           orte_process_info.my_hnp_uri[i] = ptr[i];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       orte_process_info.my_hnp_uri[len] = '\0';  /* NULL terminate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      free(uri);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It was my understanding that you wanted us to move away from the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; deprecated interface &#150; hence my comment that we cannot just quote
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all the strings as we would have to add this code all over the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; place, or (better) fix opal_cmd_line_parse.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 11/19/07 7:01 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sorry -- I'm just joining this conversation late: what's the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problem
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with opal_cmd_line_parse?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It should obey all quoting from shells, etc.  I.e., it shouldn't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; care
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; about tokens with special characters (to include spaces) because
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; shell divides all of that stuff up -- it just gets a char*[] that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; treats as discrete tokens.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is it doing something wrong?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Nov 19, 2007, at 8:39 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm not sure it is really necessary - the problem is solely  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; within
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; opal_cmd_line_parse and (if someone can parse that code ;-)) is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; truly simple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to fix. The overly long cmd line issue is due to a bug that Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; going
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to look at (may already have done so while I was out of touch).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 11/9/07 5:10 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Should there be another option for passing MCA parameters  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; between
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processes, such as via stdin (or any file descriptor)?  I.e.,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; during
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the command line parsing to check for command line MCA params,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; perhaps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a new argument could be introduced: -mcauri &lt;uri&gt;, where &lt;uri&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; could
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; be a few different forms:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - file://stdin: (note the 2 //, not 3, so &quot;stdin&quot; would never
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; conflict
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with a real file named /stdin)  Read the parameters in off  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; stdin.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - rml://...rml contact info...: read in the MCA params via the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; RML
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (although I assume that reading via the RML would be *waaaay*  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; late
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; during the MCA setup process -- I mentioned this option for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; completeness, even though I don't think it'll work)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; - ip://ipaddress:port: open a socket back and read the MCA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; params in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; over a socket.  This could have some scalability issues...?   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; who
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; knows; it could be tied into the hierarchical startup such that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wouldn't have to have an all-to-one connection scheme.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Certainly it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; would cause scalability problems when paired with today's all- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; RML connection scheme for the OOB.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm not sure that the rml: and ip: schemes are worthwhile.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maybe a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; file://stdin kind of approach could work?  Or perhaps some  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; kind
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of URI/IPC...?  (I really haven't thought through the issues --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is off the top of my head)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 8, 2007, at 2:36 PM, Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Might I suggest:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1073">https://svn.open-mpi.org/trac/ompi/ticket/1073</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It deals with some of these issues and explains the boundaries
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem. As for what a string param can contain, I have no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opinion.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; note that it must handle special characters such as ';', '/',
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; etc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; typically found in uri's. I cannot think of any reason it  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; should
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; have a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; quote in it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 11/8/07 12:25 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The alias option you presented does not work. I think we do
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; weird
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; things to find the absolute path for ssh, instead of just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; issuing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; command.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would spend some time fixing this, but I don't want to do  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrong. We
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; could quote all the param values, and change the parser to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; remove
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; quotes, but this is assuming that a mca param does not  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; contain
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; quotes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So I guess there are 2 questions that need to be answered
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; before a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fix
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is made:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1. What exactly can a string mca param contain? Can it have
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; quotes or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; spaces or?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2. Which mca parameters should be forwarded? Should it be  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ones
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; from the command line? From the environment? From config  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; files?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What changed is that we never passed mca params to the orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; before - they
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; always went to the app, but it's the orted that has the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; There is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bug ticket thread on this subject - I forget the number
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; immediately.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Basically, the problem was that we cannot generally pass the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment to the orteds when we launch them. However,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; people
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; various mca params to get to the orteds to control their
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The only
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; way to resolve that problem was to pass the params via the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; command
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; line,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; which is what was done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Except for a very few cases, all of our mca params are  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; single
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; values that do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; not include spaces, so this is not a problem that is causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; widespread
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; issues. As I said, I already had to deal with one special  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; case
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that didn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; involve spaces, but did have special characters that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; required
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; quoting, which
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; identified the larger problem of dealing with quoted  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; strings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have no objection to a more general fix. Like I said in my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; note,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; though,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the general fix will take a larger effort. If someone is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; willing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to do so,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that is fine with me - I was only offering solutions that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fill the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; interim time as I haven't heard anyone step up to say they
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fix it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; anytime soon.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please feel free to jump in and volunteer! ;-) I'm willing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; put
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the quotes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; around things if you will fix the mca cmd line parser to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cleanly
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; remove them
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on the other end.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 11/7/07 5:50 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm curious what changed to make this a problem. How were  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; passing mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; param
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; from the base to the app before, and why did it change?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I think that options 1 &amp; 2 below are no good, since we, in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; general, allow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; string mca params to have spaces (as far as I understand
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it). So
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; general approach is needed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Wednesday 07 November 2007 10:40:45 am Ralph H Castain
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry for delay - wasn't ignoring the issue.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; There are several fixes to this problem - ranging in order
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; least to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; most work:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1. just alias &quot;ssh&quot; to be &quot;ssh -Y&quot; and run without setting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca param.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It won't affect anything on the backend because the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; daemon/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; procs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; don't use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2. include &quot;pls_rsh_agent&quot; in the array of mca params not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; passed to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the orted in orte/mca/pls/base/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pls_base_general_support_fns.c,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_pls_base_orted_append_basic_args function. This would
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fix
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the specific
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem cited here, but I admit that listing every such
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; param by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; name would
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; get tedious.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3. we could easily detect that a &quot;problem&quot; character was  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca param
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; value when we add it to the orted's argv, and then put &quot;&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; around
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it. The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem, however, is that the mca param parser on the far
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; end
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; doesn't
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; remove those &quot;&quot; from the resulting string. At least, I  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; spent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; over a day
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fighting with a problem only to discover that was  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; happening.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Could be an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error in the way I was doing things, or could be a real
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; characteristic of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the parser. Anyway, we would have to ensure that the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; parser
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; removes any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; surrounding &quot;&quot; before passing along the param value or  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; won't work.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 11/5/07 12:10 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Commit 16364 broke things when using multiword mca param
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; values. For
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; instance:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --debug-daemons -mca orte_debug 1 -mca pls rsh -mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pls_rsh_agent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;ssh -Y&quot; xterm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Will crash and burn, because the value &quot;ssh -Y&quot; is being
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stored
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; into the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; argv orted_cmd_line in orterun.c:1506. This is then added
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the launch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; command for the orted:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/ssh -Y odin004  PATH=/san/homedirs/tprins/usr/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rsl/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bin:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $PATH ;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export PATH ;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/san/homedirs/tprins/usr/rsl/lib:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export LD_LIBRARY_PATH ; /san/homedirs/tprins/usr/rsl/bin/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orted
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --debug
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --debug-daemons --name 0.1 --num_procs 2 --vpid_start 0 --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nodename
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; odin004 --universe tprins_at_[hidden]:default-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; universe-27872
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --nsreplica
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;0.0;tcp://
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 129.79.240.100:40907;tcp6://2001:18e8:2:240:2e0:81ff:fe2d:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 21a0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; :4090 8&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --gprreplica
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;0.0;tcp://
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 129.79.240.100:40907;tcp6://2001:18e8:2:240:2e0:81ff:fe2d:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 21a0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; :4090 8&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -mca orte_debug 1 -mca pls_rsh_agent ssh -Y -mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_base_param_file_path
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /u/tprins/usr/rsl/share/openmpi/amca-param-sets:/san/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; homedirs/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; tprins/rsl/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; examp les
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -mca mca_base_param_file_path_force /san/homedirs/tprins/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rsl/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; examples
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Notice that in this command we now have &quot;-mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pls_rsh_agent ssh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Y&quot;. So
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the quotes have been lost, as we die a horrible death.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So we need to add the quotes back in somehow, or pass  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; these
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; options
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; differently. I'm not sure what the best way to fix this.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2641.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Previous message:</strong> <a href="2639.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>In reply to:</strong> <a href="2639.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2641.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
<li><strong>Reply:</strong> <a href="2641.php">Ralph H Castain: "Re: [OMPI devel] Multiworld MCA parameter values broken"</a>
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
